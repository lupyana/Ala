<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Artist
 * @package App\Models
 * @version July 11, 2017, 10:24 pm UTC
 */
class Artist extends Model
{

    public $table = 'artists';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'description',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


    public function album()
  {
     return $this->hasMany('App\Album');
  }

  public function songs(){
        return $this->hasMany(Song::class);
  }
}
