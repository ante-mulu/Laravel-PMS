<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class,'welcome'])->name('welcome');
Route::get('/product', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product', [ProductController::class,'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class,'update'])->name('product.update');
Route::delete('/product/{product}/delete', [ProductController::class,'delete'])->name('product.delete');
