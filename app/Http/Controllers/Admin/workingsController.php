<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Working;
use Image;
use File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class workingsController extends Controller
{
    public function index(){
        $working = Working::Paginate(20);
        return view('admin.working.index',compact('working'));
    }

    public function create(){
        return view('admin.working.create');
    }

    public function insert(Request $request){
        $working = new Working();
        $working->name = $request->name;
        $working->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();  
            $request->file('image')->move(public_path() . '/backend/upload/working/', $filename);
            Image::make(public_path() . '/backend/upload/working/' . $filename);
            $working->image = $filename;
        } else {
            $working->image = 'nopic.jpg';
        }
        $working->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('working.index');
    }

    public function edit($id){
        $working = Working::find($id);
        return view('admin.working.edit',compact('working'));
    }

    public function update(Request $request,$id){
        if ($request->hasFile('image')) {
            $working = Working::find($id);
            if ($working->image != 'nopic.jpg') {
                File::delete(public_path() . '/backend/upload/working/' . $working->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension(); 
            $request->file('image')->move(public_path() . '/backend/upload/working/', $filename);
            Image::make(public_path() . '/backend/upload/working/' . $filename);
            $working->image = $filename;

            $working->name = $request->name;
            $working->user_id = Auth::user()->id;
          
          
        } else{
            $working = working::find($id);
            $working->name = $request->name;
            $working->user_id = Auth::user()->id;
        }
        
        $working->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('working.index');
    }

    public function delete($id){
        $working = Working::find($id);
        if ($working->image != 'nopic.jpg') {
            File::delete(public_path() . '/backend/upload/working/' . $working->image);
        }
        $working->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('working.index');
    }
}
