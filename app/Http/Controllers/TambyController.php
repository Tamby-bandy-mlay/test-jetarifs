<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambyController extends Controller
{
    public function index() {
        return view('pages.Tamby');
    }
}
