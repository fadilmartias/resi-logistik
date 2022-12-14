<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResiController;
use App\Http\Controllers\DashboardController;
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
Auth::routes();

Route::middleware(['guest'])->group(function () {
    Route::get('/', [DashboardController::class, 'welcome'])->name('welcome');
    Route::post('/lacak', [DashboardController::class, 'lacak'])->name('lacak');
});


Route::middleware(['auth'])->group(function () {

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

//Resi Pengiriman
Route::resource('resi-pengiriman', ResiController::class,);
Route::get('/print/{id}', [ResiController::class, 'print'])->name('resi-pengiriman.print');
Route::get('/check/{id}', [ResiController::class, 'check'])->name('resi-pengiriman.check');
Route::get('/cancel/{id}', [ResiController::class, 'cancel'])->name('resi-pengiriman.cancel');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');


Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});

