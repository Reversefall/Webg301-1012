<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/create', [ProductsController::class, 'create']);
Route::get('/products/delete', [ProductsController::class, 'delete']);
Route::get('/products/detail', [ProductsController::class, 'detail']);
Route::post('/products', [ProductsController::class, 'store']);
Route::get('product/{id}/edit', [ProductsController::class, 'edit']);
Route::resource('products', ProductsController::class);


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/products', function () {
//     return view('products/index');
// });