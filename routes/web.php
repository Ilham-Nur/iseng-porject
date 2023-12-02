<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LokasiDonorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
//HOME
Route::get('/', [HomeController::class, 'index']);

// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//USER
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user', [UserController::class, 'tambahuser'])->name('tambahuser');

//LOKASI DONOR  
Route::get('/lokasidonor', [LokasiDonorController::class, 'index'])->name('lokasidonor');