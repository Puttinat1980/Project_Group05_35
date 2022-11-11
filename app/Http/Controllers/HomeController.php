<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Product;
use App\Models\User;
use App\Models\Working;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')
        ->with("product", Product::all())
        ->with("calendar", Calendar::all())
        ->with("employee", User::all())
        ->with("working", Working::all());
    }
}
