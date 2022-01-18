<?php

namespace App\Http\Controllers\Admin;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class WorkController extends Controller
{
    public function workIndex(Request $request){
        if ($request->ajax()) {
            $data = Work::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('work.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('work.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.work.index');
    }

    public function workCreate(){
        return view('admin.pages.work.create');
    }

    public function workStore(Request $request){
        Work::create([
            'work_year'=>$request->work_year,
            'work_post'=>$request->work_post,
            'work_company_link'=>$request->work_company_link,
            'work_company_name'=>$request->work_company_name,
            'work_description'=>$request->work_description,
        ]);

        return redirect()->route('work.index');
    }

    public function workEdit($id){
        $edit=Work::where('id',$id)->first();
        return view('admin.pages.work.edit',compact('edit'));
    }

    public function workUpdate(Request $request){
        $id=$request->id;
        Work::where('id',$id)->update([
            'work_year'=>$request->work_year,
            'work_post'=>$request->work_post,
            'work_company_link'=>$request->work_company_link,
            'work_company_name'=>$request->work_company_name,
            'work_description'=>$request->work_description,
        ]);

        return redirect()->route('work.index');
    }

    public function workDelete($id){
        Work::where('id',$id)->delete();
        return redirect()->route('work.index');
    }
}
