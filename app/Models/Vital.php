<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;

    protected $fillable = ['physical','mental','2','4','6','8'];

    public function myCharacters()
    {
        return $this->hasMany(MyCharacter::class);
    }
}
