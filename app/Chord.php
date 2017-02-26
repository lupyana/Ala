<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chord extends Model
{
    public function chordtypes(){
      return $this->hasMany(ChordType::class);
    }
}
