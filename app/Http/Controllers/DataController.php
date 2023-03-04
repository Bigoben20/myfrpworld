<?php

namespace App\Http\Controllers;

use App\Models\Aspect;
use App\Models\MyCharacter;
use App\Models\Skill;
use App\Models\Story;
use App\Models\Stunt;
use App\Models\User;
use App\Models\Vital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function dashboard()
    {
        $user = User::find(Auth::id());
        return view('user.dashboard', ['user' => $user]);
    }

    public function myCharacters()
    {
        return view('user.my-characters');
    }

    public function detailCharacter($id)
    {
        return view('user.myCharacters.details', compact('id'));
    }

    public function createCharacter()
    {
        return view('user.myCharacters.create');
    }

    public function myStories()
    {
        return view('user.my-stories');
    }

    public function detailStory($id)
    {
        return view('user.myStories.details', compact('id'));
    }
}
