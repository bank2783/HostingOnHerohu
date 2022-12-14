<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Warehouse;
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
        $products = Warehouse::where('product_status','=','selling')->get();
        return view('home',compact('products'));
    }
}
