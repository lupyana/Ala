<?php

use Faker\Factory as Faker;
use App\Models\Song;
use App\Repositories\SongRepository;

trait MakeSongTrait
{
    /**
     * Create fake instance of Song and save it in database
     *
     * @param array $songFields
     * @return Song
     */
    public function makeSong($songFields = [])
    {
        /** @var SongRepository $songRepo */
        $songRepo = App::make(SongRepository::class);
        $theme = $this->fakeSongData($songFields);
        return $songRepo->create($theme);
    }

    /**
     * Get fake instance of Song
     *
     * @param array $songFields
     * @return Song
     */
    public function fakeSong($songFields = [])
    {
        return new Song($this->fakeSongData($songFields));
    }

    /**
     * Get fake data of Song
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSongData($songFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'artist_id' => $fake->word,
            'name' => $fake->word,
            'album' => $fake->word,
            'chords' => $fake->text,
            'views' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s')
        ], $songFields);
    }
}
