<?php

namespace App\Http\Controllers\Promote;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pro = Product::Paginate(20);
        return view('promotepage.product',compact('pro'));
    }
}
