<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;


Route::resource('bukus', BukuController::class);

Route::get('/', function () {
    return redirect()->route('bukus.index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
