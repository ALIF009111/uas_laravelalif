<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pembayaranController;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/t', function () {
        return view('Pembayaran.edit');
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
    Route::get('/produk/tambah', [produkController::class, 'create']);
    Route::post('/produk', [produkController::class, 'store']);
    Route::get('/produk/edit/{id}', [produkController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}', [produkController::class, 'update']);
    Route::delete('/produk/{id}', [produkController::class, 'destroy']);

    //Pesanan
    Route::get('/pesanan', [pesananController::class, 'index']);
    Route::get('/pesanan/tambah', [pesananController::class, 'create']);
    Route::post('/pesanan', [pesananController::class, 'store']);
    Route::get('/pesanan/edit/{id}', [pesananController::class, 'edit']);
    Route::put('/pesanan/{id}', [pesananController::class, 'update']);
    Route::delete('/pesanan/{id}', [pesananController::class, 'destroy']);

    //Pembayaran
    Route::get('/pembayaran', [pembayaranController::class, 'index']);
    Route::get('/pembayaran/tambah', [pembayaranController::class, 'create']);
    Route::post('/pembayaran', [pembayaranController::class, 'store']);
    Route::get('/pembayaran/edit/{id}', [pembayaranController::class, 'edit']);
    Route::put('/pembayaran/{id}', [pembayaranController::class, 'update']);
    Route::delete('/pembayaran/{id}', [pembayaranController::class, 'destroy']);
// });



































