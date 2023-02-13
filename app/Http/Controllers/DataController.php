<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function myCharacters()
    {
        return view('my-characters');
    }
}