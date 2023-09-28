<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [OrderController::class, 'index'])->name('home');
Route::get('checkout/{id}/{quantity}', [OrderController::class, 'checkout'])->name('order.checkout');

Route::resource('customer', CustomerController::class);
Route::resource('product', ProductController::class);
Route::resource('supply', SupplyController::class);
Route::resource('order', OrderController::class);