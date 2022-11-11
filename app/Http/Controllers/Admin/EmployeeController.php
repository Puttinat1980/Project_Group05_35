<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employee = User::Paginate(20);
        return view('admin.employee.index',compact('employee'));
    }

    public function edit($id){
        $employee = User::find($id);
        return view('admin.employee.edit',compact('employee'));
    }

    public function update(Request $request,$id){
        $employee = User::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->update();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('employee.index');
    }

    public function delete($id){
        $employee = User::find($id);
        $employee->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('employee.index');
    }
}
