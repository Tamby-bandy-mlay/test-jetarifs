<?php

use App\Http\Controllers\TambyController;
use App\Http\Controllers\KamenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/kamen',[KamenController::class,'index'])->name('kamen.index');









Route::get('/tamby', [TambyController::class, 'index'])->name('tamby');
