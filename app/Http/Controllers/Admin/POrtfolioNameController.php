<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PortfolioName;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class POrtfolioNameController extends Controller
{
    public function nameIndex(Request $request){

        if ($request->ajax()) {
            $data = PortfolioName::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('name.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('name.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.name.index');
    }

    public function nameCreate(){
        return view('admin.pages.name.create');
    }

    public function nameStore(Request $request){
      
        PortfolioName::create([
            'your_name'=>$request->your_name,
            'your_position'=>$request->your_position,
        ]);

        return redirect()->route('name.index');
    }

    public function nameEdit($id){
        $edit=PortfolioName::where('id',$id)->first();
        return view('admin.pages.name.edit',compact('edit'));

    }

    public function nameUpdate(Request $request){
        $id=$request->id;
        PortfolioName::where('id',$id)->update([
            'your_name'=>$request->your_name,
            'your_position'=>$request->your_position,
        ]);

        return redirect()->route('name.index');
    }

    public function nameDelete($id){
        PortfolioName::where('id',$id)->delete();
        return redirect()->route('name.index');
    }
}
