<?php

use App\Http\Controllers\ProductController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'index'])->name('index');
Route::get('/product/create', [ProductController::class, 'create'])->name('create');
Route::get('/product', [ProductController::class, 'index'])->name('index');
Route::post('/product/store', [ProductController::class, 'store'])->name('store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name(
    'update'
);
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name(
    'destroy'
);
