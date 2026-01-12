<?php

use Illuminate\Support\Facades\Route;

// Prefix untuk beri url tambahan di depan route yang di tampung dalam group
Route::prefix('data')->group(function () {

    // Route dengan parameter opsional & nilai default
    Route::get('/nama/{nama?}/{sekolah?}', function ($nama = "John Doe", $sekolah = "SMK Telkom") {
        return "<h1>Nama saya $nama, sekolah di $sekolah</h1>";
    });

    // Route::get('/siswa/{nama?}/{sekolah?}', [App\Http\Controllers\StudentController::class, 'index']);
});

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/student/{nama?}', [App\Http\Controllers\StudentController::class, 'show']);

