<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


// Halaman utama
Route::get('/', function () {
    return 'Selamat datang di.halaman Utama E-PKL';
});


// Halaman tentang
Route::get('/tentang', function () {
    return 'Halaman ini berisi informasi tentang modul E-PKL sekolah.';
});


// Halaman kontak
Route::get('/kontak', function () {
    return 'Hubungi guru pembimbing PKL di ruang RPL.';
});



Route::prefix('perusahaan')->name('perusahaan.')->group(function () {
 Route::get('/',[PerusahaanController::class, 'index'])->name('index');
 Route::get('/{id}', [PerusahaanController::class, 'show'])->name('show');
});





