<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'value'];

    public function myCharacters()
    {
        return $this->belongsTo(MyCharacter::class);
    }
}
