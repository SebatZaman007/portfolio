<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SocialNetwork;
use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Return_;
use Yajra\DataTables\Facades\DataTables;

class SocialNetworkcontroller extends Controller
{
    public function socialnetworkIndex(Request $request){
        if ($request->ajax()) {
            $data = SocialNetwork::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('socialnetwork.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('socialnetwork.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.social-network.index');
    }

    public function socialnetworkCreate(){
        return view('admin.pages.social-network.create');
    }

    public function socialnetworkStore(Request $request){
        SocialNetwork::create([
            'icon'=>$request->icon,
            'link'=>$request->link,
            'name'=>$request->name
        ]);

        return redirect()->route('socialnetwork.index');
    }

    public function socialnetworkEdit($id){
        $edit=SocialNetwork::where('id',$id)->first();
        return view('admin.pages.social-network.edit',compact('edit'));
    }

    public function socialnetworkUpdate(Request $request){
        $id=$request->id;
        SocialNetwork::where('id',$id)->update([
            'icon'=>$request->icon,
            'link'=>$request->link,
            'name'=>$request->name
        ]);
        return redirect()->route('socialnetwork.index');
    }

    public function socialnetworkDelete($id){
        SocialNetwork::where('id',$id)->delete();
        return redirect()->route('socialnetwork.index');
      }
}
