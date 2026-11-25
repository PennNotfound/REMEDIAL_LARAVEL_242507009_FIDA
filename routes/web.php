<?php

use App\Http\Controllers\KunjunganController;
use App\Models\Kunjungan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[KunjunganController::class, 'index']);
Route::get('/Kunjungan',[KunjunganController::class, 'index']);
Route::get('/kunjungan/tambah',[KunjunganController::class, 'tambah']);
Route::post('/kunjungan/simpan',[KunjunganController::class, 'simpan']);
Route::post('/kunjungan/hapus/{id}',[KunjunganController::class, 'hapus']);