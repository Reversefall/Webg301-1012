<?php


use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
Route::get('/',[HomeController::class,'home']);
Route::get('/dashboard',[HomeController::class,'login_home'])->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('categories', CategoriesController::class);


Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('admin/index',[HomeController::class,'index'])->middleware(['auth','admin']);


Route::get('view_category',[AdminController::class,'view_category'])->middleware(['auth','admin']);
Route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);


Route::get('delete_category/{id}',[AdminController::class,'delete_category'])->middleware(['auth','admin']);
Route::get('edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth','admin']);
Route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin']);
Route::get('add_product',[AdminController::class,'add_product'])->middleware(['auth','admin']);
Route::post('upload_product',[AdminController::class,'upload_product'])->middleware(['auth','admin']);
Route::get('view_product',[AdminController::class,'view_product'])->middleware(['auth','admin']);

require __DIR__ . '/auth.php';