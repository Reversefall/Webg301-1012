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
Route::post('/products/{id}', [ProductsController::class, 'update']);

Route::get('/', [ProductsController::class, 'index']);
Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductsController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove.from.cart');


Route::get('/', function () {
    return view('welcome');
});