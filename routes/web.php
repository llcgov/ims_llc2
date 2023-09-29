<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\CustomerController;

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
// Route::get('/', [ProductController::class, 'index'])->name('home');
// Route::get('/', )

// Route::get('/product', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('checkout/{id}/{quantity}', [OrderController::class, 'checkout'])->name('order.checkout');
    
    // Route::get('/', [OrderController::class, 'index'])->name('home');

    Route::resource('customer', CustomerController::class);
    Route::resource('product', ProductController::class);
    Route::resource('supply', SupplyController::class);
    Route::resource('order', OrderController::class);
});

require __DIR__.'/auth.php';


