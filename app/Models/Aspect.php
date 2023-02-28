<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspect extends Model
{
    use HasFactory;

    protected $fillable = ['highconcept', 'trouble', 'relationship', 'aspect', 'aspect2'];

    public function setAttributes($highconcept,$trouble,$relationship,$aspect,$aspect2)
    {
        $this->attributes['highconcept'] = $highconcept;
        $this->attributes['trouble'] = $trouble;
        $this->attributes['relationship'] = $relationship;
        $this->attributes['aspect'] = $aspect;
        $this->attributes['aspect2'] = $aspect2;
    }

    public function myCharacters()
    {
        return $this->belongsTo(MyCharacter::class);
    }
}
