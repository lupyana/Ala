<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  public function album()
{
   return $this->hasMany('App\Album');
}

public function song(){
      return $this->hasMany(Song::class);
}
}
