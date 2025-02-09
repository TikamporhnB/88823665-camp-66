<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function House(){
        return view('home');
    }

    public function redirectTo()
{
    return '/dashboard';
}

}