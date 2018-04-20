<?php

use Faker\Factory as Faker;
use App\Models\Artist;
use App\Repositories\ArtistRepository;

trait MakeArtistTrait
{
    /**
     * Create fake instance of Artist and save it in database
     *
     * @param array $artistFields
     * @return Artist
     */
    public function makeArtist($artistFields = [])
    {
        /** @var ArtistRepository $artistRepo */
        $artistRepo = App::make(ArtistRepository::class);
        $theme = $this->fakeArtistData($artistFields);
        return $artistRepo->create($theme);
    }

    /**
     * Get fake instance of Artist
     *
     * @param array $artistFields
     * @return Artist
     */
    public function fakeArtist($artistFields = [])
    {
        return new Artist($this->fakeArtistData($artistFields));
    }

    /**
     * Get fake data of Artist
     *
     * @param array $postFields
     * @return array
     */
    public function fakeArtistData($artistFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'description' => $fake->word,
            'image' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $artistFields);
    }
}
