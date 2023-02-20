<?php

namespace App\Http\Livewire\MyCharacter;

use App\Models\MyCharacter;
use App\Models\Story;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Details extends Component
{
    public $stories;

    public $skills = [
        'academics',
        'athletics',
        'burglary',
        'contacts',
        'crafts',
        'deceive',
        'drive',
        'empathy',
        'fight',
        'investigate',
        'lore',
        'notice',
        'physique',
        'provoke',
        'rapport',
        'resources',
        'shoot',
        'stealth',
        'will',
    ];

    public $types = [
        ['Npc', 1],
        ['Pc', 2]
    ];

    public $myCharacter;

    public $myCharacterId;

    public $characterName;

    public function mount($id)
    {
        $this->myCharacterId = $id;
        $this->myCharacter = MyCharacter::find($this->myCharacterId);
        $this->characterName = $this->myCharacter->name;
    }

    public function render()
    {
        return view('livewire.my-character.details');
    }
}
