<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArtistApiTest extends TestCase
{
    use MakeArtistTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateArtist()
    {
        $artist = $this->fakeArtistData();
        $this->json('POST', '/api/v1/artists', $artist);

        $this->assertApiResponse($artist);
    }

    /**
     * @test
     */
    public function testReadArtist()
    {
        $artist = $this->makeArtist();
        $this->json('GET', '/api/v1/artists/'.$artist->id);

        $this->assertApiResponse($artist->toArray());
    }

    /**
     * @test
     */
    public function testUpdateArtist()
    {
        $artist = $this->makeArtist();
        $editedArtist = $this->fakeArtistData();

        $this->json('PUT', '/api/v1/artists/'.$artist->id, $editedArtist);

        $this->assertApiResponse($editedArtist);
    }

    /**
     * @test
     */
    public function testDeleteArtist()
    {
        $artist = $this->makeArtist();
        $this->json('DELETE', '/api/v1/artists/'.$artist->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/artists/'.$artist->id);

        $this->assertResponseStatus(404);
    }
}
