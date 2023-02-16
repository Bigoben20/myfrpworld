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

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function stress()
    {
        return $this->belongsTo(Stress::class);
    }

    public function stunt()
    {
        return $this->belongsTo(Stunt::class);
    }

    public function story()
    {
        return $this->hasMany(Story::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }

}
