<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{cat}', [CategoryController::class, 'showCategory'])->name('showCategory');
Route::get('/category/{cat}/{product_id}', [ProductController::class, 'showProduct'])->name('showProduct');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
