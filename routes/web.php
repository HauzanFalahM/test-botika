<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\DivisiController;

Route::get('/', function () {
    return redirect('/karyawan');
});

Route::resource('karyawan', KaryawanController::class);
Route::resource('divisi', DivisiController::class);
Route::resource('pekerjaan', PekerjaanController::class);
