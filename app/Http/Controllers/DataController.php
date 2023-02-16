<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function dashboard()
    {
        $user = User::find(Auth::id());
        return view('user.dashboard',['user'=>$user]);
    }

    public function myCharacters()
    {
        return view('user.my-characters');
    }

    public function createCharacter()
    {
        return view('user.myCharacters.create');
    }
}