<?php

<<<<<<< HEAD
use App\Http\Controllers\TambyController;
=======

>>>>>>> 5bee3bcc3cc3745980bab7366aa809f008c01d22
use App\Http\Controllers\KamenController;

use App\Http\Controllers\SafidyController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/kamen',[KamenController::class,'index'])->name('kamen.index');


<<<<<<< HEAD







Route::get('/tamby', [TambyController::class, 'index'])->name('tamby');
=======
Route::get('/Safidy', [SafidyController::class, 'index'])->name('safidy.index');

>>>>>>> 5bee3bcc3cc3745980bab7366aa809f008c01d22
