<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongRequest extends Model
{
  protected $fillable =[
    'song' , 'artist', 'otherArtists', 'album'
    ];
}
