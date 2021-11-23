<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('adminhome');
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

        Route::prefix('parts')->group(function () {
            Route::get('/', [PartController::class, 'index'])->name('part.index');
            Route::get('create', [PartController::class, 'create'])->name('part.create');
            Route::post('store', [PartController::class, 'store'])->name('part.store');
            Route::get('edit/{id}', [PartController::class, 'edit'])->name('part.edit');
            Route::post('update/{id}', [PartController::class, 'update'])->name('part.update');
            Route::post('delete/{id}', [PartController::class, 'delete'])->name('part.delete');
        });

        Route::prefix('orders')->group(function () {
            Route::get('/', [OrderController::class, 'index'])->name('order.index');
        });

        Route::prefix('users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::post('delete/{id}', [PartController::class, 'delete'])->name('user.delete');
        });
    });

    Route::post('addToCart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::post('removeFromCart', [CartController::class, 'removeFromCart'])->name('removeFromCart');
    Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::post('submitOrder', [CartController::class, 'submitOrder'])->name('submitOrder');
    Route::get('orderconfirmed/{id}', [CartController::class, 'orderconfirmed'])->name('orderconfirmed');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('parts/detail/{id}', [PartController::class, 'detail'])->name('part.detail');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');