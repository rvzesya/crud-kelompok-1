<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;


Route::resource('bukus', BukuController::class);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
