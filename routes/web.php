<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-products',[ProductController::class,'create'])->name('product.create');

Route::post('/add-products',[ProductController::class,'store'])->name('product.store');

Route::get('/all-products',[ProductController::class,'index'])->name('product.index');

Route::get('/edit-product/{product_id}',[ProductController::class,'edit'])->name('product.edit');

Route::post('/update-product/{product_id}',[ProductController::class,'update'])->name('product.update');