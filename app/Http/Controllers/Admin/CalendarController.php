<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function index(){
        $calendar = Calendar::Paginate(20);
        return view('admin.claendar.index',compact('calendar'));
    }

    public function create(){
        return view('admin.claendar.create');
    }

    public function insert(Request $request){
        $calendar = new Calendar();
        $calendar->name = $request->name;
        $calendar->user_id = Auth::user()->id;
        $calendar->detail = $request->detail;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();  
            $request->file('image')->move(public_path() . '/backend/upload/calendar/', $filename);
            Image::make(public_path() . '/backend/upload/calendar/' . $filename);
            $calendar->image = $filename;
        } else {
            $calendar->image = 'nopic.jpg';
        }
        $calendar->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('calendar.index');
    }

    public function edit($id){
        $calendar = Calendar::find($id);
        return view('admin.claendar.edit',compact('calendar'));
    }

    public function update(Request $request,$id){
        if ($request->hasFile('image')) {
            $calendar = Calendar::find($id);
            if ($calendar->image != 'nopic.jpg') {
                File::delete(public_path() . '/backend/upload/calendar/' . $calendar->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension(); 
            $request->file('image')->move(public_path() . '/backend/upload/calendar/', $filename);
            Image::make(public_path() . '/backend/upload/calendar/' . $filename);
            $calendar->image = $filename;

            $calendar->name = $request->name;
            $calendar->user_id = Auth::user()->id;
            $calendar->detail = $request->detail;
          
          
        } else{
            $calendar = calendar::find($id);
            $calendar->name = $request->name;
            $calendar->user_id = Auth::user()->id;
            $calendar->detail = $request->detail;
        }
        
        $calendar->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('calendar.index');
    }

    public function delete($id){
        $calendar = Calendar::find($id);
        if ($calendar->image != 'nopic.jpg') {
            File::delete(public_path() . '/backend/upload/calendar/' . $calendar->image);
        }
        $calendar->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('calendar.index');
    }
}
