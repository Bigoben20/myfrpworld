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
        $stories = Story::where('user_id', Auth::id());
        $skills = [
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
        $types = [
            ['Npc', 1],
            ['Pc', 2]
        ];
        return view('user.myCharacters.create', [
            'skills' => $skills,
            'stories' => $stories,
            'types' => $types
        ]);
    }

    public function storeCharacter(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'highconcept' => 'required',
            'trouble' => 'required',
            'relationship' => 'required',
            'physicalcheck' => 'required',
            'mentalcheck' => 'required',

            'academics' => 'required',
            'athletics' => 'required',
            'burglary' => 'required',
            'contacts' => 'required',
            'crafts' => 'required',
            'deceive' => 'required',
            'drive' => 'required',
            'empathy' => 'required',
            'fight' => 'required',
            'investigate' => 'required',
            'lore' => 'required',
            'notice' => 'required',
            'physique' => 'required',
            'provoke' => 'required',
            'rapport' => 'required',
            'resources' => 'required',
            'shoot' => 'required',
            'stealth' => 'required',
            'will' => 'required',
        ], [
            'name.required' => 'Name is required.',
            'highconcept.required' => 'High concept is required.',
            'trouble.required' => 'Trouble is required.',
            'relationship.required' => 'Relationship is required.',
            'physicalcheck.required' => 'At least one of physical check must checked.',
            'mentalcheck.required' => 'At least one of mental check must checked.',
            'required' => 'All skills has to be set.'
        ]);

        $character = new MyCharacter();
        $character->name = $request->name;
        $character->story->name = $request->story;
        $character->type = $request->type;
        $character->user_id = Auth::id();
        $character->save();

        $this->storeAspects($request, $character->id);
        $this->storeStunts($request, $character->id);
        $this->storeVitals($request, $character->id);

        return redirect()->route('myCharacters')->with('success', 'Character created successfully');
    }

    public function storeAspects(Request $request, $id)
    {
        $aspect = new Aspect();
        $aspect->highconcept = $request->highconcept;
        $aspect->trouble = $request->trouble;
        $aspect->relationship = $request->relationship;
        $aspect->character_id = $id;

        if ($request->aspect) {
            $aspect->aspect = $request->aspect;
        }
        if ($request->aspect2) {
            $aspect->aspect2 = $request->aspect2;
        }
        $aspect->save();
    }

    public function storeStunts(Request $request, $id)
    {
        $stunt = new Stunt();
        $stunt->refresh = $request->refresh;
        $stunt->fp = $request->fp;
        $stunt->character_id = $id;

        if ($request->stunts) {
            $stunt->stunts = $request->stunts;
        }

        $stunt->save();
    }

    public function storeVitals(Request $request, $id)
    {
        $vital = new Vital();

        if ($request->mid) {
            $vital->mid = $request->mid;
        }
        if ($request->moderate) {
            $vital->moderate = $request->moderate;
        }
        if ($request->severe) {
            $vital->severe = $request->severe;
        }
        if ($request->changer) {
            $vital->changer = $request->changer;
        }
        $vital->character_id = $id;

        $vital->physical = count($request->physicalcheck);
        $vital->mental = count($request->mentalcheck);


        $vital->save();
    }

    public function storeSkills(Request $request, $id)
    {

        $skill = new Skill();
        $skill->character_id = $id;

        $skill->academics = $request->academics;
        $skill->athletics = $request->athletics;
        $skill->burglary = $request->burglary;
        $skill->contacts = $request->contacts;
        $skill->crafts = $request->crafts;
        $skill->deceive = $request->deceive;
        $skill->drive = $request->drive;
        $skill->empathy = $request->empathy;
        $skill->fight = $request->fight;
        $skill->investigate = $request->investigate;
        $skill->lore = $request->lore;
        $skill->notice = $request->notice;
        $skill->physique = $request->physique;
        $skill->provoke = $request->provoke;
        $skill->rapport = $request->rapport;
        $skill->resources = $request->resources;
        $skill->shoot = $request->shoot;
        $skill->stealth = $request->stealth;
        $skill->will = $request->will;



        $skill->save();
    }
}
