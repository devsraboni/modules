<?php

use Illuminate\Support\Facades\Route;
use Modules\Address\Http\Controllers\AddressController;
use Modules\Address\Http\Controllers\DistrictController;
use Modules\Address\Http\Controllers\DivisionController;

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

Route::prefix('address')->name('module.')->group(function() {
    Route::get('/', [AddressController::class, 'index']);
    Route::post('store', [AddressController::class, 'store'])->name('address.store');
});

Route::prefix('division')->name('module.')->group(function() {
    Route::get('/', [DivisionController::class, 'index'])->name('division.index');
    Route::get('create', [DivisionController::class, 'create'])->name('division.create');
    Route::post('store', [DivisionController::class, 'store'])->name('division.store');
});

Route::prefix('district')->name('module.')->group(function() {
    Route::get('/', [DistrictController::class, 'index'])->name('district.index');
    Route::get('create', [DistrictController::class, 'create'])->name('district.create');
    Route::post('store', [DistrictController::class, 'store'])->name('district.store');
});


