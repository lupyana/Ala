<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateArtistAPIRequest;
use App\Http\Requests\API\UpdateArtistAPIRequest;
use App\Models\Artist;
use App\Repositories\ArtistRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ArtistController
 * @package App\Http\Controllers\API
 */

class ArtistAPIController extends AppBaseController
{
    /** @var  ArtistRepository */
    private $artistRepository;

    public function __construct(ArtistRepository $artistRepo)
    {
        $this->artistRepository = $artistRepo;
    }

    /**
     * Display a listing of the Artist.
     * GET|HEAD /artists
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->artistRepository->pushCriteria(new RequestCriteria($request));
        $this->artistRepository->pushCriteria(new LimitOffsetCriteria($request));
        $artists = $this->artistRepository->all();

        return $this->sendResponse($artists->toArray(), 'Artists retrieved successfully');
    }

    /**
     * Store a newly created Artist in storage.
     * POST /artists
     *
     * @param CreateArtistAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateArtistAPIRequest $request)
    {
        $input = $request->all();

        $artists = $this->artistRepository->create($input);

        return $this->sendResponse($artists->toArray(), 'Artist saved successfully');
    }

    /**
     * Display the specified Artist.
     * GET|HEAD /artists/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Artist $artist */
        $artist = $this->artistRepository->findWithoutFail($id);

        if (empty($artist)) {
            return $this->sendError('Artist not found');
        }

        return $this->sendResponse($artist->toArray(), 'Artist retrieved successfully');
    }

    /**
     * Update the specified Artist in storage.
     * PUT/PATCH /artists/{id}
     *
     * @param  int $id
     * @param UpdateArtistAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArtistAPIRequest $request)
    {
        $input = $request->all();

        /** @var Artist $artist */
        $artist = $this->artistRepository->findWithoutFail($id);

        if (empty($artist)) {
            return $this->sendError('Artist not found');
        }

        $artist = $this->artistRepository->update($input, $id);

        return $this->sendResponse($artist->toArray(), 'Artist updated successfully');
    }

    /**
     * Remove the specified Artist from storage.
     * DELETE /artists/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Artist $artist */
        $artist = $this->artistRepository->findWithoutFail($id);

        if (empty($artist)) {
            return $this->sendError('Artist not found');
        }

        $artist->delete();

        return $this->sendResponse($id, 'Artist deleted successfully');
    }
}
