<?php

namespace App\Http\Controllers;

use App\Home;
use App\Popular;
use App\Type_product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function SearchProduct(Request $request){
        $name = $request->search;
        $product = Home::where('product',"LIKE","%{$name}%")->paginate(100);
        $popular = Popular::where('popular',"LIKE","%{$name}%")->paginate(100);
        return view('layouts.Find_Category.search_product')
        ->with('product',$product)
        ->with('popular',$popular)
        ->with('category', Type_product::all()->sortBy('name'));

    }
}
