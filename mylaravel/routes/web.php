<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

Route::get('/user' ,
[UserController::class, 'index']);

Route::get('/register' ,
[RegisterController::class, 'index']);

Route::post('/register' ,
[RegisterController::class, 'create']);

Route::get('/login' ,
[LoginController::class,'index']);

Route::get('/mycontroller', 
[MyController::class, 'showForm']);

Route::post('/mycontroller', 
[MyController::class, 'showTable']);

Route::get('/' , function() {
        return view('layouts.default');
});

