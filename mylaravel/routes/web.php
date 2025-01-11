<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/mycontroller', [MyController::class, 'showForm']);

Route::post('/mycontroller', [MyController::class, 'showTable']);


