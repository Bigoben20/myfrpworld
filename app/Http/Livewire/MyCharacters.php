<?php

namespace App\Http\Livewire;

use App\Models\MyCharacter;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyCharacters extends Component
{

    public function render()
    {
        $myCharacters = MyCharacter::where('user_id',Auth::id())->get();  

        return view('livewire.my-characters',[
            'myCharacters' => $myCharacters
        ]);
    }
}
