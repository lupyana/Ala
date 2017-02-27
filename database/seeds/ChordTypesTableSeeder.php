<?php

use Illuminate\Database\Seeder;
use App\ChordType;

class ChordTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chorddetails = [
              [
              'notes' => 'A - C# - E',
              'othernames' => 'A - A Major - Amaj'
            ],
              [
              'notes' => 'A - C - E',
              'othernames' => 'Am - A Minor - Amin'
            ],
              [
              'notes' => 'A - C# - E - G#',
              'othernames' => 'AM7 - Amaj7 - A Major 7'
            ],
              [
              'notes' => 'A - C - E - G',
              'othernames' => 'Am7 - Amin7 - A minor 7'
            ],


              [
              'notes' => 'B - D# - F#',
              'othernames' => 'B - B Major - Bmaj'
            ],
              [
              'notes' => 'B - D - F',
              'othernames' => 'Bm - B Minor - Bmin'
            ],
              [
              'notes' => 'B - D# - F# - G#',
              'othernames' => 'BM7 - Bmaj7 - B Major 7'
            ],
              [
              'notes' => 'A - C - E - G',
              'othernames' => 'Bm7 - Bmin7 - B minor 7'
            ],


              [
              'notes' => 'C - E - G',
              'othernames' => 'C - C Major - Cmaj'
            ],
              [
              'notes' => 'C - D# - G',
              'othernames' => 'Cm - C Minor - Cmin'
            ],
              [
              'notes' => 'A - C# - E - G#',
              'othernames' => 'CM7 - Cmaj7 - C Major 7'
            ],
              [
              'notes' => 'A - C - E - G',
              'othernames' => 'Cm7 - Cmin7 - C minor 7'
            ],


              [
              'notes' => 'D - F# - A',
              'othernames' => 'D - D Major - Dmaj'
            ],
              [
              'notes' => 'D - F - A',
              'othernames' => 'Dm - D Minor - Dmin'
            ],
              [
              'notes' => 'A - C - E - G',
              'othernames' => 'Dm7 - Dmin7 - D minor 7'
            ],
              [
              'notes' => 'A - C# - E - G#',
              'othernames' => 'DM7 - Dmaj7 - D Major 7'
              ],


              [
              'notes' => 'E - G# - B',
              'othernames' => 'E - E Major - Emaj'
            ],
              [
              'notes' => 'E - G - B',
              'othernames' => 'Em - E Minor - Emin'
            ],
              [
              'notes' => 'E - G - B - C#',
              'othernames' => 'Em7 - Emin7 - E minor 7'
            ],
              [
              'notes' => 'E - G# - B - D',
              'othernames' => 'EM7 - Emaj7 - E Major 7'
              ],


              [
              'notes' => 'F - F# - A',
              'othernames' => 'F - F Major - Fmaj'
            ],
              [
              'notes' => 'F - F - A',
              'othernames' => 'Fm - F Minor - Fmin'
            ],
              [
              'notes' => 'F - C - E - G',
              'othernames' => 'Fm7 - Fmin7 - F minor 7'
            ],
              [
              'notes' => 'F - C# - E - G#',
              'othernames' => 'FM7 - Fmaj7 - F Major 7'
              ],


              [
              'notes' => 'D - F# - A',
              'othernames' => 'G - G Major - Gmaj'
            ],
              [
              'notes' => 'D - F - A',
              'othernames' => 'Gm - G Minor - Gmin'
            ],
              [
              'notes' => 'A - C - E - G',
              'othernames' => 'Gm7 - Gmin7 - G minor 7'
            ],
              [
              'notes' => 'A - C# - E - G#',
              'othernames' => 'GM7 - Gmaj7 - G Major 7'
              ],



        ];
          $chords = ChordType::get();
            $i = 0;
          foreach ($chords as $chord){
              $chord->update( ['notes' => $chorddetails[$i]['notes'] , 'othernames' => $chorddetails[$i]['othernames']] );
              $i++;
          }


    }
}
