<?php

use App\Http\Controllers\DrugController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('user-home');
    Route::get('/drugs/create', [DrugController::class, 'create'])->name('create-drug');
    Route::get('/drugs', [DrugController::class, 'index'])->name('drug');
    Route::get('user/edit', [UserController::class, 'edit'])->name('user-edit');
    Route::put('user/update', [UserController::class, 'update'])->name('user-update');
    Route::post('/pharmacy/store', [PharmacyController::class, 'store'])->name('pharmacy-store');
});
require __DIR__.'/auth.php';
