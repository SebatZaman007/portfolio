<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\UpComingProjects;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class UcProjectController extends Controller
{
    public function ucprojectIndex(Request $request){
        if ($request->ajax()) {
            $data = UpComingProjects::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('ucproject.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('ucproject.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('image',function ($data){
                    if($data->image){
                        $url=asset(BlogImage().$data->image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','image'])
                ->make(true);
        }

        return view('admin.pages.ucproject.index');
    }

    public function ucprojectCreate(){
        return view('admin.pages.ucproject.create');
    }

    public function ucprojectStore(Request $request){
        if (!empty($request->image)) {
            $image = fileUpload($request['image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        UpComingProjects::create([
            'image'=> $image,
            'name'=>$request->name,
            'year'=>$request->year,
        ]);

        return redirect()->route('ucproject.index');
    }

    public function ucprojectEdit($id){
        $edit=UpComingProjects::where('id',$id)->first();
        return view('admin.pages.ucproject.edit',compact('edit'));
    }

    public function ucprojectUpdate(Request $request){
        $id=$request->id;
        if (!empty($request->project_image)) {
            $image = fileUpload($request['image'], BlogImage());
        } else {
            $var=UpComingProjects::where('id',$id)->first();
            $image= $var->image;
        }

        UpComingProjects::where('id',$id)->update([
            'image'=> $image,
            'name'=>$request->name,
            'year'=>$request->year,
        ]);
        return redirect()->route('ucproject.index');

    }

    public function ucprojectDelete($id){
        UpComingProjects::where('id',$id)->delete();
        return redirect()->route('ucproject.index');
    }
}
