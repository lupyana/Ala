<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SongApiTest extends TestCase
{
    use MakeSongTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateSong()
    {
        $song = $this->fakeSongData();
        $this->json('POST', '/api/v1/songs', $song);

        $this->assertApiResponse($song);
    }

    /**
     * @test
     */
    public function testReadSong()
    {
        $song = $this->makeSong();
        $this->json('GET', '/api/v1/songs/'.$song->id);

        $this->assertApiResponse($song->toArray());
    }

    /**
     * @test
     */
    public function testUpdateSong()
    {
        $song = $this->makeSong();
        $editedSong = $this->fakeSongData();

        $this->json('PUT', '/api/v1/songs/'.$song->id, $editedSong);

        $this->assertApiResponse($editedSong);
    }

    /**
     * @test
     */
    public function testDeleteSong()
    {
        $song = $this->makeSong();
        $this->json('DELETE', '/api/v1/songs/'.$song->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/songs/'.$song->id);

        $this->assertResponseStatus(404);
    }
}
