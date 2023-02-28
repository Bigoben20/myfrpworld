<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
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

    public function setAttributes(
        $academics,$athletics,$burglary,
        $contacts,$crafts,$deceive,
        $drive,$empathy,$fight,
        $investigate,$lore,$notice,
        $physique,$provoke,$rapport,
        $resources,$shoot,$stealth,$will
        )
    {
        $this->attributes['academics'] = $academics;
        $this->attributes['athletics'] = $athletics;
        $this->attributes['burglary'] = $burglary;
        $this->attributes['contacts'] = $contacts;
        $this->attributes['crafts'] = $crafts;
        $this->attributes['deceive'] = $deceive;
        $this->attributes['drive'] = $drive;
        $this->attributes['empathy'] = $empathy;
        $this->attributes['fight'] = $fight;
        $this->attributes['investigate'] = $investigate;
        $this->attributes['lore'] = $lore;
        $this->attributes['notice'] = $notice;
        $this->attributes['physique'] = $physique;
        $this->attributes['provoke'] = $provoke;
        $this->attributes['rapport'] = $rapport;
        $this->attributes['resources'] = $resources;
        $this->attributes['shoot'] = $shoot;
        $this->attributes['stealth'] = $stealth;
        $this->attributes['will'] = $will;
    }

    public function myCharacters()
    {
        return $this->belongsTo(MyCharacter::class);
    }
}
