<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product/{sort}', [
    ProductController::class, 'index'
])->name('product');

Route::get('/product-details/{product:slug}', [
    ProductController::class, 'showProductDetails'
])->name('productDetails');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
