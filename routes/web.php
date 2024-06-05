<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-products',[ProductController::class,'create'])->name('product.create');

Route::post('/add-products',[ProductController::class,'store'])->name('product.store');

Route::get('/all-products',[ProductController::class,'index'])->name('product.index');