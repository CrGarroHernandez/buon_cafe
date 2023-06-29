<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/products', 'content.products')->name('products');
Route::view('/product/1', 'content.product')->name('product');
Route::view('/store', 'content.store')->name('store');