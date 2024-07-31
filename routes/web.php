<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DaftarMobilController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/daftarmobil', [DaftarMobilController::class, 'index']);
Route::get('daftarmobil/booking/{id}', [DaftarMobilController::class, 'booking']);
Route::post('daftarmobil/tambahbooking', [DaftarMobilController::class, 'tambahbooking']);

Route::get('/daftarbooking', [BookingController::class, 'index']);
Route::get('/daftarbooking/edit/{id}', [BookingController::class, 'edit']);
Route::post('/daftarbooking/save', [BookingController::class, 'saveedit']);
Route::delete('/daftarbooking/hapus', [BookingController::class, 'delete']);




