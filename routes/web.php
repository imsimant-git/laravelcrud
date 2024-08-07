<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/products/create',[ProductController::class ,'create'])->name('products.create');
Route::get('/',[ProductController::class ,'index'])->name('products.index');
Route::post('/products/store',[ProductController::class ,'store'])->name('products.store');
Route::get('/products/view',[ProductController::class ,'view'])->name('products.view');
Route::get('/delete/{id}',[ProductController::class ,'delete'])->name('products.delete');
Route::get('/update_view/{id}',[ProductController::class ,'update_view'])->name('products.update');
Route::post('/update/{id}',[ProductController::class ,'update']);
