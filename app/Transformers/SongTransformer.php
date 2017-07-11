<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Song;



class SongTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */

     protected $availableIncludes =  [
       'artist'
     ];

     protected $defaultIncludes =  [
       'artist'
     ];

    public function transform(Song $song)
    {
        return [
          'id' => $song->id,
          'name' => $song->name,
          'album' => $song->album
            //
        ];
    }

    public function includeArtist(Song $song){
      $artist = $song->artist;

      return $this->item($artist, new ArtistTransformer);
    }
}
