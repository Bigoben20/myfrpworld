<?php

namespace App\Http\Livewire;

use App\Models\MyCharacter;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class CharacterCreate extends Component
{
    use LivewireAlert;

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
    public $myCharacterNotes;

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
    public $physicalcheck = [];
    public $mentalcheck = [];
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

    public function store()
    {
        try {
            
                $character = new MyCharacter();

                $character->name = $this->myCharacterName;
                $character->type = $this->myCharacterType;
                $character->notes = $this->myCharacterNotes;
    
                // datacontrollerdaki gibi her şeyi ayrı kaydedicez karakter id ile
                $character->aspect->highConcept = $this->highConcept;
                $character->aspect->trouble = $this->trouble;
                $character->aspect->relationship = $this->relationship;
                $character->aspect->aspect = $this->aspect;
                $character->aspect->aspect2 = $this->aspect2;
                
                $character->stunt->stunts = $this->stunts;
                $character->stunt->refresh = $this->refresh;
                $character->stunt->fp = $this->fp;
                
                $character->vital->physical = count($this->physicalcheck);
                $character->vital->mental = count($this->mentalcheck);
                $character->vital->mid = $this->mid;
                $character->vital->moderate = $this->moderate;
                $character->vital->severe = $this->severe;
                $character->vital->changer = $this->changer;
                
                $character->skill->academics = $this->academics;
                $character->skill->athletics = $this->athletics;
                $character->skill->burglary = $this->burglary;
                $character->skill->contacts = $this->contacts;
                $character->skill->crafts = $this->crafts;
                $character->skill->deceive = $this->deceive;
                $character->skill->drive = $this->drive;
                $character->skill->empathy = $this->empathy;
                $character->skill->fight = $this->fight;
                $character->skill->investigate = $this->investigate;
                $character->skill->lore = $this->lore;
                $character->skill->notice = $this->notice;
                $character->skill->physique = $this->physique;
                $character->skill->provoke = $this->provoke;
                $character->skill->rapport = $this->rapport;
                $character->skill->resources = $this->resources;
                $character->skill->shoot = $this->shoot;
                $character->skill->stealth = $this->stealth;
                $character->skill->will = $this->will;
            
                $character->save();
    
    
            $this->alert('success', "$this->myCharacterName başarıyla oluşturuldu.");
        } catch (\Exception $ex) {
            $this->alert('error', "$this->myCharacterName oluşturuluken bir hata oluştu.");
            dd($ex);
        }
    }

    public function render()
    {
        return view('livewire.character-create');
    }
}
