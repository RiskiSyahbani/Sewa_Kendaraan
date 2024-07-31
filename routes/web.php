<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DaftarMobilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index');
        Route::get('home', 'index');
        Route::get('dashboard/booking', 'viewbooking');
    });
});

Route::middleware('admin')->group(function () {
    Route::controller(DashboardController::class)->group(function() {
        Route::get('dashboard/car', 'viewcar');
        Route::get('dashboard/tipe', 'viewtipe');
    });
});




