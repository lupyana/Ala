<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chord;

class contentController extends Controller
{
    public function getChords(){

      $chords=  Chord::with('chordtypes')->get();

      return view('pages.allChords')->with([ 'chords' => $chords ]);
    }
}
