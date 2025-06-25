<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamenController extends Controller
{
    //
    public function index()
    {
        return view('kamen.index');
    }
}
