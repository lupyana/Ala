<?php

use App\Models\Artist;
use App\Repositories\ArtistRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArtistRepositoryTest extends TestCase
{
    use MakeArtistTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ArtistRepository
     */
    protected $artistRepo;

    public function setUp()
    {
        parent::setUp();
        $this->artistRepo = App::make(ArtistRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateArtist()
    {
        $artist = $this->fakeArtistData();
        $createdArtist = $this->artistRepo->create($artist);
        $createdArtist = $createdArtist->toArray();
        $this->assertArrayHasKey('id', $createdArtist);
        $this->assertNotNull($createdArtist['id'], 'Created Artist must have id specified');
        $this->assertNotNull(Artist::find($createdArtist['id']), 'Artist with given id must be in DB');
        $this->assertModelData($artist, $createdArtist);
    }

    /**
     * @test read
     */
    public function testReadArtist()
    {
        $artist = $this->makeArtist();
        $dbArtist = $this->artistRepo->find($artist->id);
        $dbArtist = $dbArtist->toArray();
        $this->assertModelData($artist->toArray(), $dbArtist);
    }

    /**
     * @test update
     */
    public function testUpdateArtist()
    {
        $artist = $this->makeArtist();
        $fakeArtist = $this->fakeArtistData();
        $updatedArtist = $this->artistRepo->update($fakeArtist, $artist->id);
        $this->assertModelData($fakeArtist, $updatedArtist->toArray());
        $dbArtist = $this->artistRepo->find($artist->id);
        $this->assertModelData($fakeArtist, $dbArtist->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteArtist()
    {
        $artist = $this->makeArtist();
        $resp = $this->artistRepo->delete($artist->id);
        $this->assertTrue($resp);
        $this->assertNull(Artist::find($artist->id), 'Artist should not exist in DB');
    }
}
