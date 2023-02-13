<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function myCharacters()
    {
        return view('my-characters');
    }
}