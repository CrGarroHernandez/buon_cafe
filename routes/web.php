<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/', 'content.home')->name('home');
Route::view('/about', 'content.about')->name('about');
// Route::view('/products', 'content.products')->name('products');
Route::get('/products', [ProductController::class, 'index'])->name('content.products');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('content.product');

// Route::controller(ProductController::class)->group(function() {
//     Route::get('products', 'index')->name('content.products');
//     Route::put('product/{id}', 'show')->name('content.product');
// })->name('pro');

// Route::view('/product/1', 'content.product')->name('product');
Route::view('/store', 'content.store')->name('store');