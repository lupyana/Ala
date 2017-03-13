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
      $art->name ='Maua Sama';
      $art->save();
      $s = new Song();
      $s->name = 'Mahaba Niue';
      $s->album = '';
      $s->chords = '[ Intro ]
                      Bm G D A

                      [ Verse ]
                      Bm G D A

                      [ Chorous ]
                      Bm G D A';
      $art->song()->save($s);

      $art = new Artist();
      $art->name ='Papa wemba';
      $art->save();
      $s = new Song();
      $s->name = 'Show me the way';
      $s->album = '';
      $s->chords = '[ Intro ]
                      C#m B A B

                      [ Verse ]
                      C#m B A B

                      [ Chorous ]
                      C#m B A B';
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

            $art = new Artist();
            $art->name ='Yemi Alade';
            $art->save();
            $s = new Song();
            $s->name = 'Na Gode';
            $s->album = '';
            $s->chords = '[ Intro ]
                          F   C    Dm   Am
                          Eeh ooh, ooh oo-oh
                          Bb   F        Bb       C
                          Papa asante, kweli we ni Mungu
                          F      C        Dm      Am
                          Yemi Alade!
                          Bb   F        Bb       C
                          Papa asante, kweli we ni Mungu

                          [VERSE]
                          F      C        Dm      Am
                          Kama una-hustle ni lazima utulie
                          Bb     F        Bb       C
                          Ujivunie, ubangaize eh
                          F      C        Dm      Am
                          Baada ya kazi lazima utakite
                          Bb     F        Bb       C
                          Uburudike, jiachilie eh

                          [PRE-CHORUS]
                          F      C        Dm      Am
                          Ila usisahau ooh, si kwa nguvu zako
                          Bb     F        Bb       C
                          Sema asante, kweli ye ni Mungu
                          F      C        Dm      Am
                          Tena si ya hatia ooh, to spend your money
                          Bb     F        Bb       C
                          Sema asante, kweli ye ni Mungu

                          [CHORUS]
                          F      C        Dm      Am
                          Hata ukikosa ukikosa ukikosa eh
                          Bb     F        Bb       C
                          Sema asante, kweli we ni Mungu
                          F      C        Dm      Am
                          Na ukipata, ukipata, ukipata eh
                          Bb     F        Bb       C
                          Sema asante, kweli we ni Mungu

                          [VERSE]
                          F      C        Dm      Am
                          Na see wee drive, you supposed to park
                          Bb     F        Bb       C
                          You no supposed to lack oh
                          F      C        Dm      Am
                          You suppose to pack money ebelebe
                          Bb     F        Bb       C
                          Imana onye Na-Agba mbo o supposed to hammer
                            F      C        Dm      Am
                          You supposed to hammer oh
                          Bb     F        Bb       C
                          You supposed to make am o ebelebe iya eh

                          [PRE-CHORUS]
                          F      C        Dm      Am
                          Ila usisahau ooh, si kwa nguvu zakoo
                          Bb     F        Bb       C
                          Sema asante, kweli ye ni mungu
                          F      C        Dm      Am
                          Tena si ya hatia ooh, to spend your money
                          Bb     F        Bb       C
                          Sema asante, kweli ye ni Mungu

                          [CHORUS]
                          F      C        Dm      Am
                          Hata ukikosa ukikosa ukikosa eh
                          Bb     F        Bb       C
                            Sema asante, kweli we ni Mungu
                          F      C        Dm      Am
                          Na ukipata, ukipata, ukipata eh
                          Bb     F        Bb       C
                          Sema asante, kweli we ni Mungu

                          [VERSE]
                          F      C        Dm      Am
                          Pop Rosé, no more enemy iye eh eh
                          Bb     F        Bb       C
                          Pop champagne, no more complaining eh
                          F      C        Dm      Am
                          If you de live for Kenya ooh, or anywhere in Africa oh
                          Bb     F        Bb       C
                          Make you dey pop anything, cause all na popping
                          F      C        Dm      Am
                          We driving Ferrari oh, cruising Bugatti oh
                          Bb     F        Bb       C
                          You rocking Versace oh, forever and ever eh
                          F      C        Dm      Am
                          We going higher oh, we no go retire oh
                          Bb     F        Bb       C
                          Si we getting paper oh, this is my desire eh

                          [CHORUS]
                          F      C        Dm      Am
                          Hata ukikosa, ukikosa, ukikosa eh
                          Bb     F        Bb       C
                          Sema asante, kweli we ni Mungu
                          F      C        Dm      Am
                          Na ukipata, ukipata, ukipata eh
                          Bb     F        Bb       C
                          Sema asante, kweli we ni Mungu
                          (x2)

                          [OUTRO]
                          F      C        Dm      Am
                          Ni Mungu eh
                          Bb     F        Bb       C
                          Yemi Alade
                          F      C        Dm      Am
                          Effyzzie baby
                          Bb     F        Bb       C
                          Merci beaucoup bien!

                          ';
            $art->song()->save($s);

            $art = new Artist();
            $art->name ='Sauti Sol';
            $art->save();
            $s = new Song();
            $s->name = 'Kuliko Jana';
            $s->album = '';
            $s->chords = '[ INTRO ]
                            F C G Am  x2

                            [CHORUS]
                            F                       C
                            Bwana ni mwokozi wangu, tena ni kiongozi wangu
                            G                         Am
                            Ananipenda leo kuliko jana
                            F                       C
                            Baraka zake hazikwishi, si kama binadamu habadiliki
                            G                         Am
                            Ananipenda leo kuliko jana
                            F                       C
                            Kuliko Jana Kuliko Jana
                            G                         Am
                            Yesu nipende leo kuliko jana
                            F                       C
                            Kuliko Jana  Kuliko Jana
                            G                         Am
                            Yesu nipende leo kuliko jana

                            [VERSE]
                            F              C
                            Nakuomba Mungu awasamehe
                            G                         Am
                            Wangalijua jinsi unavyonipenda mimi wasingenisema
                            F              C
                            Na maadui wangu nawaombe
                            G                         Am
                            maisha marefu wazidi kuona ukinibariki
                            F              C
                            Ujue binadamu ni waajabu sana
                            G                         Am
                            Walimkana Yesu mara tatu kabla jogoo kuwika
                            F              C
                            Ujue binadamu ni waajabu sana
                            G                         Am
                            Walimsulubisha Yesu Messiah bila kusita

                            [CHORUS]
                            F                       C
                            Bwana ni mwokozi wangu, tena ni kiongozi wangu
                            G                         Am
                            Ananipenda leo kuliko jana
                            F                       C
                            Baraka zake hazikwishi, si kama binadamu habadiliki
                            G                         Am
                            Ananipenda leo kuliko jana
                            F                       C
                            Kuliko Jana Kuliko Jana
                            G                         Am
                            Yesu nipende leo kuliko jana
                            F                       C
                            Kuliko Jana  Kuliko Jana
                            G                         Am
                            Yesu nipende leo kuliko jana

                            [VERSE]
                            F                       C
                            Wewe ndio nategemea, Kufa kupona baba nakutegemea
                            G                         Am
                            Chochote kitanikatsia, kuingia mbinguni utaniondolea (oooh oooh yeah)
                            F                       C
                            Wewe ndio nategemea, (amen) Kufa kupona baba nakutegemea (oh oh)
                            G                         Am
                            Chochote kitanikatsia, kuingia mbinguni utaniondolea (wewe, ndio nategemea)
                            F                       C
                            Wewe ndio nategemea, Kufa kupona ndio nategemea (Eh bwana)
                            G                         Am
                            Chochote kitanikatsia, kuingia mbinguni utaniondolea (Eh, maisha yangu yote)
                            F                       C
                            Wewe ndio nategemea, (kwa nguvu zangu zote), kufa kupona baba nakutegemea (nakutegemea)
                            G                         Am
                            Chochote kitanikatsia, kuingia mbinguni utaniondolea (oooooooh)

                            [CHORUS]
                            F                       C
                            Bwana ni mwokozi wangu, tena ni kiongozi wangu
                            G                         Am
                            Ananipenda leo kuliko jana
                            F                       C
                            Baraka zake hazikwishi, si kama binadamu habadiliki
                            G                         Am
                            Ananipenda leo kuliko jana
                            F                       C
                            Kuliko Jana Kuliko Jana
                            G                         Am
                            Yesu nipende leo kuliko jana
                            F                       C
                            Kuliko Jana  Kuliko Jana
                            G                         Am
                            Yesu nipende leo kuliko jana

                            [VERSE]
                            F                       C
                            Wewe ndio nategemea (wewe), kufa kupona baba nakutegemea (wewe)
                            G                         Am
                            Chochote kitanikatsia (uh-huh), kuingia mbinguni utaniondolea
                            F                       C
                            Wewe ndio nategemea (oooh), kufa kupona baba nakutegemea (nakutegemea)
                            G                         Am
                            Chochote kitanikatsia kuingia mbinguni utaniondolea

                            [CHORUS]
                            F                       C
                            Bwana ni mwokozi wangu, tena ni kiongozi wangu
                            G                         Am
                            Ananipenda leo kuliko jana
                            F                       C
                            Baraka zake hazikwishi, si kama binadamu habadiliki
                            G                         Am
                            Ananipenda leo kuliko jana
                            F                       C
                            Kuliko Jana Kuliko Jana
                            G                         Am
                            Yesu nipende leo kuliko jana
                            F                       C
                            Kuliko Jana  Kuliko Jana
                            G                         Am
                            Yesu nipende leo kuliko jana

                            [ OUTRO ]
                            F C G Am';

            $art->song()->save($s);

            $s = new Song();
            $s->name = 'Isabella';
            $s->album = '';
            $s->chords = " [ INTRO ]
                          A maj A maj7 D Dm

                          [VERSE]
                          A maj                                  A maj7
                          Hey Isabella Are you gonna come out and dance, with me tonight
                          D                                   Dm
                          The stars look beautiful, outside, so so beautiful
                          A maj                                  A maj7
                          Tell your mama i said sorry I didn't bring you home early, last time
                          D                                   Dm
                          And I was a little tipsy I know she doesn't miss me

                          [PRE-CHORUS]
                          Bm
                          So put on those shoes, that I like
                          E maj
                          And we'll go, and dance the night
                          Bm     Em    E maj
                          away Away, Yeah!!

                          [CHORUS]
                          D                                        F#m
                          Because YOLO YOLO You Only Live Once So, and me i wanna have some fun
                          E                              E
                          Vunja mifupa kama meno iko Up and away we go
                          D                                        F#m
                          And spend all my money on you baby Cause i can't take it with me when am dead
                          E                               Bm7
                          So tonight, tonight  We are young, high, and in love

                          [VERSE]
                          A maj                                  A maj7
                          Isabella One day I'll be a superstar, we'll go to America
                          D                      Dm
                          Big show in a stadium Wuuwuuwuuwuu!!
                          A maj                         A maj7
                          Isabella Today we boda boda,tomorrow we
                          D                   Dm
                          motorcar         (Nisikilize baby)

                          [PRE-CHORUS]
                          Bm
                          So put on the dress that hugs you tight
                          E maj
                          And we'll go, and dance the night
                          Bm     Em    E maj
                          away Away, Yeah!!


                          [CHORUS]
                          D                                 F#m
                          YOLO YOLO You Only Live Once So, me i wanna have some fun
                          E                              E
                          Vunja mifupa kama meno iko Up and away we go
                          D                                        F#m
                          And spend all my money on you baby Cause i can't take it with me when am dead
                          E                               Bm7
                          So tonight, tonight  We are young, high, and in love

                            ... x2

                            ";

            $art->song()->save($s);

    }
}
