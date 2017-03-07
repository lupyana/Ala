<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chord;
use App\Artist;
use App\Song;

class contentController extends Controller
{
    public function getChords(){

      $chords=  Chord::with('chordtypes')->get();

      return view('pages.allChords')->with([ 'chords' => $chords ]);
    }


    public function addLesson(Request $request){
      $this -> validate($request, [
          'artist' => 'required',
          'song'   => 'required',
          // 'chords' => 'required|min:46'
        ]);
            $art = Artist::where('name', '=', $request['artist'])->first();
            if(!$art){
                  $art = new Artist();
                  $art->name =$request['artist'];
                  $art->save();
                  $s = new Song();
                  // $s->artist = $request['artist'];
                  $s->name = $request['song'];
                  $s->album = $request['album'];
                  $s->chords = $request['chords'];
                  $art->song()->save($s);
            }
            else{
                  $s = new Song();
                  // $s->artist = $request['artist'];
                  $s->name = $request['song'];
                  $s->album = $request['album'];
                  $s->chords = $request['chords'];
                  $art->song()->save($s);
            }

          //  return $request['chords'];/
       return redirect('/')->with('success' , 'Your tab has been added succesfully!');
    }

    public function getSong( Request $request, $song){

              $song= Song::with('artist')->where('name', '=', $song)->first();
              if( !$song){
                return view('errors.503');
              }
                return view('pages.songs.viewSong')->with([ 'song' => $song ]);
    }

    public function goHome(){
       $songs = Song::with('artist')->orderBy('created_at', 'desc')->take(5)->get();
       return view('welcome')->with([ 'songs' => $songs ]);
    }

}
