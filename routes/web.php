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
    // Tambah Pelamar

    Route::get('home/t_pelamar', [HomeController::class, 't_pelamar']);
    Route::post('home/t_pelamar', [HomeController::class, 't_pelamar'])->name('t_pelamar'); 
    Route::post('home/aksi_t_pelamar', [HomeController::class, 'aksi_t_pelamar'])->name('aksi_t_pelamar');
    

// Edit Pelamar
Route::get('home/e_pelamar/{id}', [HomeController::class, 'editPelamar'])->name('editPelamar');

});




Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/ok', [HomeController::class, 'ok']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/setting', [HomeController::class, 'setting']);
Route::get('home/t_pelamar', [HomeController::class, 't_pelamar']);
Route::post('home/t_pelamar', [HomeController::class, 't_pelamar'])->name('t_pelamar'); 



Route::get('home/aksi_t_pelamar', [HomeController::class, 'aksi_t_pelamar']);
Route::get('/kelas', [HomeController::class, 'kelas'])->name('kelas');




