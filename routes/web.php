<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlasifikasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form-upload', function () {
    return view('klasifikasi.v_upload');
});

Route::post('/upload', [KlasifikasiController::class, 'upload'])->name('upload');

Route::get('/view-data/{namaFile}', [KlasifikasiController::class, 'viewData'])->name('viewData');

Route::get('/klasifikasi/{namaFile}', [KlasifikasiController::class, 'klasifikasi'])->name('klasifikasi');
