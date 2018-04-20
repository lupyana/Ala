<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Artist;

class ArtistTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Artist $artist)
    {
        return [
          'id' => $artist->id,
          'name' => $artist->name,
        ];
    }
}
