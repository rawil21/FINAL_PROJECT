<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/register', function() {
    return view('auth.register');
})->name('register');

Route::get('/', function() {
    return view('main.index');
})->name('home');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products');