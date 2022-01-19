<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function contactIndex(Request $request){
        if ($request->ajax()) {
            $data = Contacts::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('contact.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('contact.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.contact.index');
    }

    public function contactCreate(){
        view('admin.pages.contact.create');
    }

    public function contactStore(Request $request){
        Contacts::create([
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);

        return redirect()->route('front.index');
    }

    public function contactEdit($id){
        $edit=Contacts::where('id',$id)->first();
        return view('admin.pages.contact.edit',compact('edit'));
    }

    public function contactUpdate(Request $request){
        $id=$request->id;
        Contacts::where('id',$id)->update([
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);

        return redirect()->route('contact.index');

    }

    public function contactDelete($id){
        Contacts::where('id',$id)->delete();
        return redirect()->route('contact.index');
    }
}
