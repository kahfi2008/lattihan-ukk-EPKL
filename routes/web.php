<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\KompetensiController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('siswa', SiswaController::class);

Route::resource('perusahaan', PerusahaanController::class);

Route::resource('kompetensi', KompetensiController::class);