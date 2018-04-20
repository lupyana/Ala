<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChordType extends Model
{
      public function chords(){
        return $this->belongsToMany(Chord::class);

      }
}
