<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class LanguageController extends Controller
{
    public function languageIndex(Request $request){
        if ($request->ajax()) {
            $data = Language::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('language.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('language.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pages.language.index');
    }

    public function languageCreate(){
        return view('admin.pages.language.create');
    }

    public function languageStore(Request $request){

        Language::create([
            'name'=>$request->name,
            'reading'=>$request->reading,
            'speking'=>$request->speking,
            'listening'=>$request->listening,
            'writing'=>$request->writing
        ]);

        return redirect()->route('language.index');
    }

    public function languagEedit($id){
        $edit=Language::where('id',$id)->first();
        return view('admin.pages.language.edit',compact('edit'));
    }

    public function languageUpdate(Request $request){
        $id=$request->id;
        Language::where('id',$id)->update([
            'name'=>$request->name,
            'reading'=>$request->reading,
            'speking'=>$request->speking,
            'listening'=>$request->listening,
            'writing'=>$request->writing
        ]);

        return redirect()->route('language.index');
    }

    public function languageDelete($id){
        Language::where('id',$id)->delete();
        return redirect()->route('language.index');
    }
}
