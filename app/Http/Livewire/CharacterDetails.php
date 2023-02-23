<?php

namespace App\Http\Livewire;

use App\Models\Aspect;
use App\Models\MyCharacter;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CharacterDetails extends Component
{
    use LivewireAlert;

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
    public $stunts;
    public $refresh;
    public $fp;

    //  Vitals
    public $physical = [];
    public $mental = [];
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

        //  Aspects
        $this->highConcept = $this->myCharacter->aspect->highconcept;
        $this->trouble = $this->myCharacter->aspect->trouble;
        $this->relationship = $this->myCharacter->aspect->relationship;
        $this->aspect = $this->myCharacter->aspect->aspect;
        $this->aspect2 = $this->myCharacter->aspect->aspect2;

        // Stunts
        $this->stunts = $this->myCharacter->stunt->stunts;
        $this->refresh = $this->myCharacter->stunt->refresh;
        $this->fp = $this->myCharacter->stunt->fp;

        //  Vitals
        for ($i = 0; $i < $this->myCharacter->vital->physical; $i++) {
            $this->physical[$i] = "on";
        }
        for ($i = 0; $i < $this->myCharacter->vital->mental; $i++) {
            $this->mental[$i] = "on";
        }
        $this->mid = $this->myCharacter->vital->mid;
        $this->moderate = $this->myCharacter->vital->moderate;
        $this->severe = $this->myCharacter->vital->severe;
        $this->changer = $this->myCharacter->vital->changer;
    }

    public function updateCharacter($id)
    {
        try {

            $myCharacter = MyCharacter::find($id);
            $myCharacter->setAttributes(
                $this->myCharacterName,
                $this->myCharacterType
            );

            $aspects = Aspect::where('character_id',$id)->first();
            $aspects->setAttributes(
                $this->highConcept,
                $this->trouble,
                $this->relationship,
                $this->aspect,
                $this->aspect2
            );

            $myCharacter->save();
            $aspects->save();


            $this->alert('success', "$this->myCharacterName başarıyla güncellendi.");
            $this->resetInput();

        } catch (\Exception $ex) {
            session()->flash('success', 'Something goes wrong!!');
        }
    }

    public function render()
    {
        return view('livewire.character-details');
    }
}
