<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('Login');
});
Route::get('/about',function() {
    return view('about');
});
Route::get('/', function() {
    return view('login');
});
Route::get('/Register', function () {
    return view('Register');
});
Route::get('/header', function () {
    return view('Header');
});

//Route::resource('user', UserController::class);
//Route::resource('product', ProductController::class);
//Route::resource('cart', CartController::class);