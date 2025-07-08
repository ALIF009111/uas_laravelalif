<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosenController;



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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

