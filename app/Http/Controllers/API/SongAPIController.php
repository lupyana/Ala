<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSongAPIRequest;
use App\Http\Requests\API\UpdateSongAPIRequest;
use App\Models\Song;
use App\Repositories\SongRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;


use App\Transformers\SongTransformer;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;


/**
 * Class SongController
 * @package App\Http\Controllers\API
 */

class SongAPIController extends AppBaseController
{
    /** @var  SongRepository */
    private $songRepository;

    public function __construct(SongRepository $songRepo)
    {
        $this->songRepository = $songRepo;
    }

    /**
     * Display a listing of the Song.
     * GET|HEAD /songs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->songRepository->pushCriteria(new RequestCriteria($request));
        $this->songRepository->pushCriteria(new LimitOffsetCriteria($request));
        $songs = $this->songRepository->all();

        $manager = new Manager();

        $r = new  Collection($songs, new SongTransformer);

        $songs = $manager->createData($r);

        return $this->sendResponse($songs->toArray(), 'Songs retrieved successfully');
    }

    /**
     * Store a newly created Song in storage.
     * POST /songs
     *
     * @param CreateSongAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSongAPIRequest $request)
    {
        $input = $request->all();

        $songs = $this->songRepository->create($input);

        return $this->sendResponse($songs->toArray(), 'Song saved successfully');
    }

    /**
     * Display the specified Song.
     * GET|HEAD /songs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Song $song */
        $song = $this->songRepository->findWithoutFail($id);

        if (empty($song)) {
            return $this->sendError('Song not found');
        }

        return $this->sendResponse($song->toArray(), 'Song retrieved successfully');
    }

    /**
     * Update the specified Song in storage.
     * PUT/PATCH /songs/{id}
     *
     * @param  int $id
     * @param UpdateSongAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSongAPIRequest $request)
    {
        $input = $request->all();

        /** @var Song $song */
        $song = $this->songRepository->findWithoutFail($id);

        if (empty($song)) {
            return $this->sendError('Song not found');
        }

        $song = $this->songRepository->update($input, $id);

        return $this->sendResponse($song->toArray(), 'Song updated successfully');
    }

    /**
     * Remove the specified Song from storage.
     * DELETE /songs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Song $song */
        $song = $this->songRepository->findWithoutFail($id);

        if (empty($song)) {
            return $this->sendError('Song not found');
        }

        $song->delete();

        return $this->sendResponse($id, 'Song deleted successfully');
    }

    public function recents(Request $request)
    {
        // $this->songRepository->pushCriteria(new RequestCriteria($request));
        // $this->songRepository->pushCriteria(new LimitOffsetCriteria($request));
        // $songs = $this->songRepository->orderBy('created_at' , 'desc')->paginate(10);
        $songs = Song::with('artist')->orderBy('id', 'desc')->take(5)->get();

        $manager = new Manager();

        $r = new  Collection($songs, new SongTransformer);

        $songs = $manager->createData($r);

        return $this->sendResponse($songs->toArray(), 'Songs retrieved successfully');
    }
}
