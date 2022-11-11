<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $pro = Product::Paginate(20);
        return view('admin.product.index',compact('pro'));
    }
    public function create(){
        return view('admin.product.create');
    }
    public function insert(Request $request){
        $pro = new Product();
        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->detail = $request->detail;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();  
            $request->file('image')->move(public_path() . '/backend/upload/product/', $filename);
            Image::make(public_path() . '/backend/upload/product/' . $filename);
            $pro->image = $filename;
        } else {
            $pro->image = 'nopic.jpg';
        }
        $pro->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');
        return redirect()->route('pro.index');
    }

    public function edit($id)
    {
        return view('admin.product.edit')
            ->with("product", Product::find($id));
    }


    public function update(Request $request, $id)
    {
        
        if ($request->hasFile('image')) {
            $product = Product::find($id);
            if ($product->image != 'nopic.jpg') {
                File::delete(public_path() . '/backend/upload/product/' . $product->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension(); 
            $request->file('image')->move(public_path() . '/backend/upload/product/', $filename);
            Image::make(public_path() . '/backend/upload/product/' . $filename);
            $product->image = $filename;

            $product->name = $request->name;
            $product->price = $request->price;
            $product->detail = $request->detail;
          
          
        } else{
            $product = Product::find($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->detail = $request->detail;
        }
        
        $product->save();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');
        return redirect()->route('pro.index');
    }



    public function delete($id){
        $product = Product::find($id);
        if ($product->image != 'nopic.jpg') {
            File::delete(public_path() . '/backend/upload/product/' . $product->image);
        }
        $product->delete();
        toast('ลบข้อมูลสำเร็จ', 'success');
        return redirect()->route('pro.index');
    }
}
