<?php

use Illuminate\Database\Seeder;
use App\Artist;
use App\Song;
class artistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $art = new Artist();
      $art->name ='Papa wemba';
      $art->save();
      $s = new Song();
      $s->name = 'Show me the way';
      $s->album = 'album';
      $s->chords = '[ Intro ]
                      C#m B A B

                      [ Verse ]
                      C#m B A B

                      [ Chorous ]
                      C#m B A B';
      $art->song()->save($s);

      $art = new Artist();
      $art->name ='Sauti Sol';
      $art->save();
      $s = new Song();
      $s->name = 'Kuliko Jana';
      $s->album = 'album';
      $s->chords = '[ Intro ]
                      F C G Am

                      [ Verse ]
                      F C G Am

                      [ Chorous ]
                      F C G Am';
      $art->song()->save($s);

      $art = new Artist();
      $art->name ='Yemi Alade';
      $art->save();
      $s = new Song();
      $s->name = 'Na Gode';
      $s->album = 'album';
      $s->chords = '[ Intro ]
                      F C Dm Am B F B C

                      [ Verse ]
                      F C Dm Am B F B C

                      [ Chorous ]
                      F C Dm Am B F B C';
      $art->song()->save($s);

      $art = new Artist();
      $art->name ='Oliver Mtukidzi';
      $art->save();
      $s = new Song();
      $s->name = 'Neria';
      $s->album = 'Neria';
      $s->chords = '[ Intro ]
                      C G Am Em F C G C

                      [ Verse ]
                      C G Am Em F C G C

                      [ Chorous ]
                      C G Am Em F C G C F G ';
      $art->song()->save($s);

      $s = new Song();
      $s->name = 'Todi';
      $s->album = 'Neria';
      $s->chords = '[ Intro ]
                    C G Am7 G

                      [ Verse ]
                    C G Am7 G

                      [ Chorous ]
                    C G Am7 G';
      $art->song()->save($s);
    }
}
