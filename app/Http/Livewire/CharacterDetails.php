<?php

namespace App\Http\Livewire;

use App\Models\Aspect;
use App\Models\MyCharacter;
use App\Models\Skill;
use App\Models\Stunt;
use App\Models\Vital;
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

    public $countp = 0;
    public $countm = 0;

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

    public function mount($id)
    {
        $this->myCharacterId = $id;
        $this->myCharacter = MyCharacter::where('id', $this->myCharacterId)->first();
        $this->myCharacterName = $this->myCharacter->name;
        $this->myCharacterType = $this->myCharacter->type;
        $this->myCharacterNotes = $this->myCharacter->notes;

        //  Aspects
        $this->highConcept = $this->myCharacter->aspect->highconcept;
        $this->trouble = $this->myCharacter->aspect->trouble;
        $this->relationship = $this->myCharacter->aspect->relationship;
        $this->aspect = $this->myCharacter->aspect->aspect;
        $this->aspect2 = $this->myCharacter->aspect->aspect2;

        // Stunts
        if ($this->myCharacter->stunt->stunts == null) {
            $this->stunts = "";
        }
        else {
            $this->stunts = $this->myCharacter->stunt->stunts;
        }
        $this->refresh = $this->myCharacter->stunt->refresh;
        $this->fp = $this->myCharacter->stunt->fp;

        //  Vitals
        // unset($this->physical);
        // unset($this->mental);

        for ($i = 0; $i < $this->myCharacter->vital->physical; $i++) {
            $this->physical[$i] = true;
        }
        for ($i = 0; $i < $this->myCharacter->vital->mental; $i++) {
            $this->mental[$i] = true;
        }
        $this->mid = $this->myCharacter->vital->mid;
        $this->moderate = $this->myCharacter->vital->moderate;
        $this->severe = $this->myCharacter->vital->severe;
        $this->changer = $this->myCharacter->vital->changer;

        // Skills
        $this->academics = $this->myCharacter->skill->academics;
        $this->athletics = $this->myCharacter->skill->athletics;
        $this->burglary = $this->myCharacter->skill->burglary;
        $this->contacts = $this->myCharacter->skill->contacts;
        $this->crafts = $this->myCharacter->skill->crafts;
        $this->deceive = $this->myCharacter->skill->deceive;
        $this->drive = $this->myCharacter->skill->drive;
        $this->empathy = $this->myCharacter->skill->empathy;
        $this->fight = $this->myCharacter->skill->fight;
        $this->investigate = $this->myCharacter->skill->investigate;
        $this->lore = $this->myCharacter->skill->lore;
        $this->notice = $this->myCharacter->skill->notice;
        $this->physique = $this->myCharacter->skill->physique;
        $this->provoke = $this->myCharacter->skill->provoke;
        $this->rapport = $this->myCharacter->skill->rapport;
        $this->resources = $this->myCharacter->skill->resources;
        $this->shoot = $this->myCharacter->skill->shoot;
        $this->stealth = $this->myCharacter->skill->stealth;
        $this->will = $this->myCharacter->skill->will;
    }

    public function updateCharacter($id)
    {   

            $myCharacter = MyCharacter::find($id);
            $myCharacter->setAttributes(
                $this->myCharacterName,
                $this->myCharacterType,
                $this->myCharacterNotes
            );

            $aspects = Aspect::where('character_id',$id)->first();
            $aspects->setAttributes(
                $this->highConcept,
                $this->trouble,
                $this->relationship,
                $this->aspect,
                $this->aspect2
            );

            $stunts = Stunt::where('character_id',$id)->first();
            $stunts->setAttributes(
                $this->stunts,
                $this->refresh,
                $this->fp,
            );


            foreach ($this->physical as $key => $value) {
                if ($value == true) {
                    $this->countp ++;
                }
            }
            foreach ($this->mental as $key => $value) {
                if ($value == true) {
                    $this->countm ++;
                }
            }
            $vitals = Vital::where('character_id',$id)->first();
            $vitals->setAttributes(
                $this->countp,
                $this->countm,
                $this->mid,
                $this->moderate,
                $this->severe,
                $this->changer,
            );
            
            $skills = Skill::where('character_id',$id)->first();
            $skills->setAttributes(
                $this->academics,
                $this->athletics,
                $this->burglary,
                $this->contacts,
                $this->crafts,
                $this->deceive,
                $this->drive,
                $this->empathy,
                $this->fight,
                $this->investigate,
                $this->lore,
                $this->notice,
                $this->physique,
                $this->provoke,
                $this->rapport,
                $this->resources,
                $this->shoot,
                $this->stealth,
                $this->will
            );

            $this->validate();
            
            $myCharacter->save();
            $aspects->save();
            $stunts->save();
            $vitals->save();
            $skills->save();

            $this->alert('success', "$this->myCharacterName başarıyla güncellendi.");

            $this->countp = 0;
            $this->countm = 0;

        
    }

    public function destroy($id)
    {
        # code...
    }

    public function render()
    {
        return view('livewire.character-details');
    }
}
