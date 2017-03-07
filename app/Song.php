<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  public function chords(){
    return $this->belongsToMany(Artist::class);

  }

  protected $fillable =[
    'artistid' , 'name', 'album', 'chords'
    ];
}
