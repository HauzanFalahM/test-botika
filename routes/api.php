<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\DivisiController;

Route::middleware('api')->group(function () {
    Route::resource('karyawans', KaryawanController::class);
    Route::resource('divisis', DivisiController::class);
    Route::resource('pekerjaans', PekerjaanController::class);
});
