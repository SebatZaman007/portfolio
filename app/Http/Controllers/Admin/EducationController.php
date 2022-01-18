<?php

namespace App\Http\Controllers\Admin;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EducationController extends Controller
{
    public function educationIndex(Request $request){
        if ($request->ajax()) {
            $data = Education::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('education.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('education.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.education.index');
    }

    public function educationCreate(){
        return view('admin.pages.education.create');
    }

    public function educationStore(Request $request){
        Education::create([
            'education_year'=>$request->education_year,
            'education_degree'=>$request->education_degree,
            'education_institution'=>$request->education_institution
        ]);

        return redirect()->route('education.index');
    }

    public function educationEdit($id){
        $edit=Education::where('id',$id)->first();
        return view('admin.pages.education.edit',compact('edit'));
    }

    public function educationUpdate(Request $request){
        $id=$request->id;
        Education::where('id',$id)->update([
            'education_year'=>$request->education_year,
            'education_degree'=>$request->education_degree,
            'education_institution'=>$request->education_institution

        ]);

        return redirect()->route('education.index');
    }

    public function educationDelete($id){
        Education::where('id',$id)->delete();
        return redirect()->route('education.index');
    }
}
