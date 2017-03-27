<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Artist;

class searchController extends Controller
{
    public function userSearch(Request $request ){

      $this -> validate($request, [
      'strquery'  => 'required|max:300',
    ]);

    $value = $request['strquery'];
    //check for songs
    $songs = Song::where('name', 'LIKE',  "%$value%")->get();
    //check for artisits
    $artists = Artist::where('name', 'LIKE',  "%$value%")->get();



     return view('pages.results')->with([
                                        'searchQry' => $request['strquery'],
                                         'songs' => $songs,
                                          'artists' => $artists]);
    }
}
