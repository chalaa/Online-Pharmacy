<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
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
Route::get('/single-shop/{id}', [HomeController::class, 'singleShop'])->name('single-shop');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::middleware(['auth','verified'])->group(function () {
    // user
    Route::get('/home', [UserController::class, 'index'])->name('user-home');
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user-edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user-update');

    //admin

    Route::get('/admin/create', [AdminController::class, 'create'])->name('create-admin');
    Route::post('/admin', [AdminController::class, 'store'])->name('store-admin');

    // Drug

    Route::get('/drugs/create', [DrugController::class, 'create'])->name('create-drug');
    Route::get('/drugs', [DrugController::class, 'index'])->name('drug');
    Route::post('/drug',[DrugController::class, 'store'])->name('store-drug');
    Route::delete('/drug/{id}',[DrugController::class, 'destroy'])->name('destroy-drug');
    Route::put('/drug/{id}', [DrugController::class, 'update'])->name('update-drug');
    Route::get('/drug/{id}/edit', [DrugController::class, 'edit'])->name('edit-drug');
    Route::get('/drug/{id}', [DrugController::class, 'show'])->name('show-drug');

    /// Pharmacy
    Route::get('/pharmacies', [PharmacyController::class, 'approvedPharmacy'])->name('approved-pharmacy');
    Route::get('/pharmacies/new', [PharmacyController::class, 'registerdPharmacy'])->name('registered-pharmacy');
    Route::get('/pharmacies/deleted',[PharmacyController::class, 'deletedPharmacy'])->name('deleted-pharmacy');
    Route::get('/pharmacies/{id}/edit', [PharmacyController::class, 'edit'])->name('edit-pharmacy');
    Route::get('/pharmacies/{id}', [PharmacyController::class, 'pharmacyDetail'])->name('pharmacy-detail');
    Route::put('/pharmacies/{id}', [PharmacyController::class, 'update'])->name('update-pharmacy');
    Route::post('/pharmacy/store', [PharmacyController::class, 'store'])->name('pharmacy-store');
    Route::put('/pharmacy/{id}', [PharmacyController::class, 'approvePharmacy'])->name('pharmacy-approve');
    Route::delete('pharmacy/{id}', [PharmacyController::class, 'deletePharmacy'])->name('pharmacy-delete');

    //customer

    Route::get('/customer/shop',[CustomerController::class, 'shop'])->name('customer-shop');
    Route::get('/customer/create',[CustomerController::class, 'create'])->name('customer-create');
    Route::get('/customer/{id}/edit',[CustomerController::class, 'edit'])->name('customer-edit');
    Route::get('/customer/shop/{id}',[CustomerController::class,'singleShop'])->name('customer-singleShop');
    Route::post('/customer',[CustomerController::class,'store'])->name('customer-store');
    Route::put('/customer/{id}',[CustomerController::class,'update'])->name('customer-update');
});
require __DIR__.'/auth.php';
