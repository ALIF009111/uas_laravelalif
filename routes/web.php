<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelangganController;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/template', function () {
    return view('layouts.template');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//pelanggan
Route::get('/pelanggan', [pelangganController::class, 'index']);
Route::get('/pelanggan/tambah', [pelangganController::class, 'create']);
Route::post('/pelanggan', [pelangganController::class, 'store']); 

