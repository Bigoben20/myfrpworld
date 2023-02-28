<?php

namespace App\Http\Livewire;

use App\Models\Aspect;
use App\Models\MyCharacter;
use App\Models\Skill;
use App\Models\Stunt;
use App\Models\Vital;
use Illuminate\Support\Facades\Auth;
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
    public $refresh = 3;
    public $fp = 3;

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

    protected $rules = [
        'myCharacterName' => 'required',
        'myCharacterType' => 'required',
        'highConcept' => 'required',
        'trouble' => 'required',
        'relationship' => 'required',
    ];

    protected $messages = [
        'myCharacterName.required' => 'Character name cannot be empty.',
        'myCharacterType.required' => 'Character type cannot be empty.',
        'highConcept.required' => 'High concept cannot be empty.',
        'trouble.required' => 'Trouble cannot be empty.',
        'relationship.required' => 'Relationship cannot be empty.',
    ];

    public function store()
    {
        

        $character = new MyCharacter();

        $character->name = $this->myCharacterName;
        $character->type = $this->myCharacterType;
        $character->notes = $this->myCharacterNotes;
        $character->user_id = Auth::id();


        $aspects = new Aspect();
        $aspects->highConcept = $this->highConcept;
        $aspects->trouble = $this->trouble;
        $aspects->relationship = $this->relationship;
        $aspects->aspect = $this->aspect;
        $aspects->aspect2 = $this->aspect2;
        
        $stunts = new Stunt();
        $stunts->stunts = $this->stunts;
        $stunts->refresh = $this->refresh;
        $stunts->fp = $this->fp;
        
        $vitals = new Vital();
        $vitals->physical = count($this->physicalcheck);
        $vitals->mental = count($this->mentalcheck);
        $vitals->mid = $this->mid;
        $vitals->moderate = $this->moderate;
        $vitals->severe = $this->severe;
        $vitals->changer = $this->changer;
        
        $skills = new Skill();
        $skills->academics = $this->academics;
        $skills->athletics = $this->athletics;
        $skills->burglary = $this->burglary;
        $skills->contacts = $this->contacts;
        $skills->crafts = $this->crafts;
        $skills->deceive = $this->deceive;
        $skills->drive = $this->drive;
        $skills->empathy = $this->empathy;
        $skills->fight = $this->fight;
        $skills->investigate = $this->investigate;
        $skills->lore = $this->lore;
        $skills->notice = $this->notice;
        $skills->physique = $this->physique;
        $skills->provoke = $this->provoke;
        $skills->rapport = $this->rapport;
        $skills->resources = $this->resources;
        $skills->shoot = $this->shoot;
        $skills->stealth = $this->stealth;
        $skills->will = $this->will;

        $this->validate();

        $character->save();

        $aspects->character_id = $character->id;
        $stunts->character_id = $character->id;
        $vitals->character_id = $character->id;
        $skills->character_id = $character->id;

        $aspects->save();
        $stunts->save();
        $vitals->save();
        $skills->save();

        redirect()->route('myCharacters')->with('success','Character created successfully');
        // try {
                

        //     $this->alert('success', "$this->myCharacterName başarıyla oluşturuldu.");
        // } catch (\Exception $ex) {
        //     $this->alert('error', $ex->errorInfo[2]);
        // }
    }

    public function render()
    {
        return view('livewire.character-create');
    }
}
