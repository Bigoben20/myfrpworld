<?php

namespace App\Http\Livewire;

use App\Models\MyCharacter;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class CharacterDetails extends Component
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

    public MyCharacter $myCharacter;

    public $myCharacterId;

    public $myCharacterName;
    public $myCharacterType;

    //  Aspects
    public $highConcept;
    public $trouble;
    public $relationship;
    public $aspect;
    public $aspect2;

    //  Stunts
    public $stuns;
    public $refresh;
    public $fp;

    //  Vitals
    public $physical;
    public $mental;
    public $mid;
    public $moderate;
    public $severe;
    public $changer;

    //  Skills
    public $academics;
    public $athletics;
    public $burglary;
    public $contacts;
    public $crafts;
    public $deceive;
    public $drive;
    public $empathy;
    public $fight;
    public $investigate;
    public $lore;
    public $notice;
    public $physique;
    public $provoke;
    public $rapport;
    public $resources;
    public $shoot;
    public $stealth;
    public $will;

    public function mount($id)
    {
        $this->myCharacterId = $id;
        $this->myCharacter = MyCharacter::where('id', $this->myCharacterId)->first();
        $this->myCharacterName = $this->myCharacter->name;
        $this->myCharacterType = $this->myCharacter->type;
        $this->highConcept = $this->myCharacter->aspect->highconcept;
    }

    public function render()
    {
        return view('livewire.character-details');
    }
}
