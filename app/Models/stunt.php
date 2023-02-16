<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunt extends Model
{
    use HasFactory;

    protected $fillable = ['stunts','refresh','fp'];

    public function myCharacters()
    {
        return $this->hasMany(MyCharacter::class);
    }
}
