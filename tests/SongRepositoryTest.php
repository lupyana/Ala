<?php

use App\Models\Song;
use App\Repositories\SongRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SongRepositoryTest extends TestCase
{
    use MakeSongTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SongRepository
     */
    protected $songRepo;

    public function setUp()
    {
        parent::setUp();
        $this->songRepo = App::make(SongRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateSong()
    {
        $song = $this->fakeSongData();
        $createdSong = $this->songRepo->create($song);
        $createdSong = $createdSong->toArray();
        $this->assertArrayHasKey('id', $createdSong);
        $this->assertNotNull($createdSong['id'], 'Created Song must have id specified');
        $this->assertNotNull(Song::find($createdSong['id']), 'Song with given id must be in DB');
        $this->assertModelData($song, $createdSong);
    }

    /**
     * @test read
     */
    public function testReadSong()
    {
        $song = $this->makeSong();
        $dbSong = $this->songRepo->find($song->id);
        $dbSong = $dbSong->toArray();
        $this->assertModelData($song->toArray(), $dbSong);
    }

    /**
     * @test update
     */
    public function testUpdateSong()
    {
        $song = $this->makeSong();
        $fakeSong = $this->fakeSongData();
        $updatedSong = $this->songRepo->update($fakeSong, $song->id);
        $this->assertModelData($fakeSong, $updatedSong->toArray());
        $dbSong = $this->songRepo->find($song->id);
        $this->assertModelData($fakeSong, $dbSong->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteSong()
    {
        $song = $this->makeSong();
        $resp = $this->songRepo->delete($song->id);
        $this->assertTrue($resp);
        $this->assertNull(Song::find($song->id), 'Song should not exist in DB');
    }
}
