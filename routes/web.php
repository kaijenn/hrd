<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route untuk halaman utama

// Route untuk halaman /welcome
Route::middleware(['web'])->group(function () {
    Route::get('home/dashboard', [HomeController::class, 'dashboard']);
    Route::get('home/login', [HomeController::class, 'login']);
    Route::post('home/aksi_login', [HomeController::class, 'aksi_login'])->name('aksi_login'); // Route baru
    Route::get('home/setting', [HomeController::class, 'setting']);
    Route::get('home/pelamar', [HomeController::class, 'pelamar']);
});




Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/ok', [HomeController::class, 'ok']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/setting', [HomeController::class, 'setting']);



Route::get('/kelas', [HomeController::class, 'kelas'])->name('kelas');




