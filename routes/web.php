<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/template', function () {
        return view('layouts.template');
    });

    // Pelanggan
    Route::get('/pelanggan', [pelangganController::class, 'index']);
    Route::get('/pelanggan/tambah', [pelangganController::class, 'create']);
    Route::post('/pelanggan', [pelangganController::class, 'store']);
    Route::get('/pelanggan/edit/{id}', [pelangganController::class, 'edit'])->name('pelanggan.edit');
    Route::put('/pelanggan/{id}', [pelangganController::class, 'update']);
    Route::delete('/pelanggan/{id}', [pelangganController::class, 'destroy']);

    //Produk
    Route::get('/produk', [produkController::class, 'index']);
// });



































