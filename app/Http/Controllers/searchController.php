<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function userSearch(Request $request ){

      $this -> validate($request, [
      'strquery'  => 'required|max:300',
    ]);

     return view('pages.results')->with(['searchQry' => $request['strquery']]);
    }
}
