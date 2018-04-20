<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Song
 * @package App\Models
 * @version July 11, 2017, 1:24 pm UTC
 */
class Song extends Model
{

    public $table = 'songs';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'artist_id',
        'name',
        'album',
        'chords',
        'views'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'artist_id' => 'string',
        'name' => 'string',
        'album' => 'string',
        'chords' => 'string',
        'views' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function artist(){
      return $this->belongsTo(Artist::class);

    }

}
