<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Popular;
use App\Home;
use App\Type_product;
use App\User;

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
        if (auth()->user()->isAdmin()) {
            $popular_product_check  = Popular::all();
            $product_check = Home::all();
            $type_product_check  = Type_product::all();
            $user_check  = User::all();
            return view('admin/dashboard', compact('popular_product_check', 'product_check', 'type_product_check', 'user_check'));
        } else {
            return view('welcome');
        }
    }
}
