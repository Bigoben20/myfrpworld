<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;

    protected $fillable = ['physical', 'mental', 'mid', 'moderate', 'severe', 'changer'];

    public function setAttributes($physical,$mental,$mid,$moderate,$severe,$changer)
    {
        $this->attributes['physical'] = $physical;
        $this->attributes['mental'] = $mental;
        $this->attributes['mid'] = $mid;
        $this->attributes['moderate'] = $moderate;
        $this->attributes['severe'] = $severe;
        $this->attributes['changer'] = $changer;
    }

    public function myCharacters()
    {
        return $this->belongsTo(MyCharacter::class);
    }
}
