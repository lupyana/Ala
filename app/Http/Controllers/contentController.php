<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chord;

class contentController extends Controller
{
    public function getChords(){

      $chords=  Chord::get();

      return view('pages.allChords')->with([ 'chordnames' => $chords->pluck('name') ]);
    }
}
