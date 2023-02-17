<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCharacter extends Model
{
    use HasFactory;

    protected $fillabe = [
        'name',
        'type'
    ];

    public function aspect()
    {
        return $this->hasOne(Aspect::class, 'character_id', 'id');
    }

    public function skill()
    {
        return $this->hasOne(Skill::class, 'character_id', 'id');
    }

    public function stress()
    {
        return $this->hasOne(Stress::class, 'character_id', 'id');
    }

    public function stunt()
    {
        return $this->hasOne(Stunt::class, 'character_id', 'id');
    }

    public function story()
    {
        return $this->belongsToMany(Story::class, 'character_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
