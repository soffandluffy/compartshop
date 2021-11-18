<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;

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
        Route::prefix('part')->group(function () {
            Route::get('/', [PartController::class, 'index'])->name('part.index');
        });
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');