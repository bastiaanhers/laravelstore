<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index($id)
    {   
        $catagories = DB::table('product_catagory')->get();
        $products = DB::table('products')->get();

       
        return view('home', ['products'=>$products, 'catagories'=>$catagories]);
    }
}
