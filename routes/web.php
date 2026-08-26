<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::resource('kompetensi', KompetensiController::class);

Route::resource('perusahaan', PerusahaanController::class);

Route::resource('siswa', SiswaController::class);