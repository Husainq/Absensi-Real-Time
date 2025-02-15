<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\IzinKaryawanController;
use App\Http\Controllers\Web\KelolaAkunController;
use App\Http\Controllers\Web\PresensiController;

Route::view('/', 'login');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('/login/store', [AuthController::class, 'login'])->name('login');
Route::get('/presensi', [PresensiController::class,'index'])->name('web/presensi');
Route::get('/kelola-akun', [KelolaAkunController::class,'index'])->name('web/kelola-akun');
Route::get('/izinkaryawan', [IzinKaryawanController::class,'index'])->name('web/izinkaryawan');
require __DIR__.'/auth.php';
