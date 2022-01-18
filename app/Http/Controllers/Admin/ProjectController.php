<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    public function projectIndex(Request $request){

        if ($request->ajax()) {
            $data = Project::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('project.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('project.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('project_image',function ($data){
                    if($data->project_image){
                        $url=asset(BlogImage().$data->project_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','project_image'])
                ->make(true);
        }
        return view('admin.pages.project.index');
    }

    public function projectCreate(){
        return view('admin.pages.project.create');
    }

    public function projectStore(Request $request){
        if (!empty($request->project_image)) {
            $project_image = fileUpload($request['project_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Project::create([
            'project_image'=> $project_image,
            'project_name'=>$request->project_name,
            'project_year'=>$request->project_year,
        ]);

        return redirect()->route('project.index');
    }

    public function projectEdit($id){
        $edit=Project::where('id',$id)->first();
        return view('admin.pages.project.edit',compact('edit'));
    }

    public function projectUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->project_image)) {
            $project_image = fileUpload($request['project_image'], BlogImage());
        } else {
            $var=Project::where('id',$id)->first();
            $project_image= $var->project_image;
        }

        Project::where('id',$id)->update([
            'project_image'=> $project_image,
            'project_name'=>$request->project_name,
            'project_year'=>$request->project_year,
        ]);

        return redirect()->route('project.index');
    }

    public function projectDelete($id){
        Project::where('id',$id)->delete();
        return redirect()->route('project.index');
    }


}
