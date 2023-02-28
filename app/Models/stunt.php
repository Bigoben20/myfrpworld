<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunt extends Model
{
    use HasFactory;

    protected $fillable = ['stunts', 'refresh', 'fp'];

    public function setAttributes($stunts,$refresh,$fp)
    {
        $this->attributes['stunts'] = $stunts;
        $this->attributes['refresh'] = $refresh;
        $this->attributes['fp'] = $fp;
    }

    public function myCharacters()
    {
        return $this->belongsTo(MyCharacter::class);
    }
}
