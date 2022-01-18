<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PortfolioSocialMedia;
use Yajra\DataTables\Facades\DataTables;

class PortfolioSocialMediaController extends Controller
{
    public function socialmediaIndex(Request $request){

        if ($request->ajax()) {
            $data = PortfolioSocialMedia::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('socialmedia.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('socialmedia.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pages.social-media.index');
    }

    public function socialmediaCreate(){
        return view('admin.pages.social-media.create');
    }

    public function socialmediaStore(Request $request){
        PortfolioSocialMedia::create([
            'icon'=>$request->icon,
            'link'=>$request->link,
            'name'=>$request->name
        ]);
        return redirect()->route('socialmedia.index');

    }

    public function socialmediaEdit($id){
        $edit=PortfolioSocialMedia::where('id',$id)->first();

        return view('admin.pages.social-media.edit',compact('edit'));

    }

    public function socialmediaUpdate(Request $request){
        $id=$request->id;
        PortfolioSocialMedia::where('id',$id)->update([
            'icon'=>$request->icon,
            'link'=>$request->link,
            'name'=>$request->name
        ]);

        return redirect()->route('socialmedia.index');
    }

    public function socialmediaDelete($id){
        PortfolioSocialMedia::where('id',$id)->delete();
        return redirect()->route('socialmedia.index');
    }




}
