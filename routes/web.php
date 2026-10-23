<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('bukus.index'));
Route::resource('bukus', BukuController::class);
