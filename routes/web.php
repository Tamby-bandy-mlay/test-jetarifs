<?php

<<<<<<< HEAD
use App\Http\Controllers\KamenController;
=======
use App\Http\Controllers\SafidyController;
>>>>>>> Safidy
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

<<<<<<< HEAD
Route::get('/kamen',[KamenController::class,'index'])->name('kamen.index');
=======

Route::get('/Safidy', [SafidyController::class, 'index'])->name('safidy.index');
>>>>>>> Safidy
