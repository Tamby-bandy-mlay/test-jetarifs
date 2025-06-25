<?php

use App\Http\Controllers\SafidyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/Safidy', [SafidyController::class, 'index'])->name('safidy.index');
