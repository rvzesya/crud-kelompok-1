<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () =>redirect()->route('bukus.index'));
Route::resource('bukus', BukuController::class);
    return view('welcome');

