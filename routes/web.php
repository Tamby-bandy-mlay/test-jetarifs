<?php

use App\Http\Controllers\TambyController;
use App\Http\Controllers\KamenController;
use App\Http\Controllers\SafidyController;




use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/kamen',[KamenController::class,'index'])->name('kamen.index');




Route::get('/tamby', [TambyController::class, 'index'])->name('tamby');
Route::get('/Safidy', [SafidyController::class, 'index'])->name('safidy.index');

