<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

// แสดงฟอร์ม
Route::get('/mycontroller', [MyController::class, 'showForm']);

// แสดงตารางสูตรคูณ
Route::post('/mycontroller', [MyController::class, 'showTable']);


