<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\ProductList;

class ProductController extends Controller
{
    function index(){
        return view('product');
    }

    function store(Request $req){
        //return redirect('/product');
        print_r($req->input());
        $c = new categories();
        $c -> name = $req->category;
        $c -> save();
    }
}
