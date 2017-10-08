<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chord;
use App\Artist;
use App\Song;
use App\SongRequest;

class contentController extends Controller
{
    public function index()
    {
      $chords=  Chord::with('chordtypes')->get();
      return view('pages.allChords')->with(['chords' => $chords]);
    }

    public function getChords(){

      $chords=  Chord::with('chordtypes')->get();

      return response()->json($chords);
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
                  $art->songs()->save($s);
            }
            else{
                  $s = new Song();
                  // $s->artist = $request['artist'];
                  $s->name = $request['song'];
                  $s->album = $request['album'];
                  $s->chords = $request['chords'];
                  $art->songs()->save($s);
            }

          //  return $request['chords'];/
       return redirect('/')->with('success' , 'Your tab has been added succesfully!');
    }

    public function getSong( $song){

              $song= Song::with('artist')->where('name', '=', $song)->first();
              if( !$song){
                return view('errors.503');
              }
                  $v = $song->views++;
                  $song->save();

                return view('pages.songs.viewSong')->with([ 'song' => $song ]);
    }

    public function getArtists(){
              $artists = Artist::orderBy('name')->get();
             return view('pages.viewArtists')->with([ 'artists' => $artists ]);
    }

    public function getArtistsdetails($artistName){
            $artists = Artist::with('songs')->where('name', '=', $artistName)->first();
            if( !$artists){
              return view('errors.503');
            }
            return view('pages.viewSongs')->with([ 'songs' => $artists->songs ]);

    }
    public function getSongs(){
              $song= Song::with('artist')->orderBy('name')->get();
             return view('pages.viewSongs')->with([ 'songs' => $song ]);
    }

    public function goHome(){
       $songs = Song::with('artist')->orderBy('id', 'desc')->take(5)->get();
       $views = Song::with('artist')->orderBy('views', 'desc')->take(5)->get();
       return view('welcome')->with([ 'songs' => $songs  , 'views' => $views ]);
      // return view('pages.admin.index')->with([ 'songs' => $songs  , 'views' => $views ]);
    }

    public function requestLesson(Request $request){
      $this -> validate($request, [
          'artist' => 'required',
          'song'   => 'required',
          'email' => 'required|email',
          'name' => 'required'
              ]);

        $r = new SongRequest();
        $r->song = $request['song'];
        $r->artist = $request['artist'];
        $r->otherArtists = $request['feauteredartists'];
        $r->album = $request['album'];
        $r->requested_by = $request['name'];
        $r->email = $request['email'];
        $r->save();

        return redirect('/')->with('success' , 'Your request has been sent! You will be notified once it has been added!');
    }

}
