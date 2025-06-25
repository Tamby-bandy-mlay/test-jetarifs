<?php

use App\Http\Controllers\TambyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/tamby', [TambyController::class, 'index'])->name('tamby');

