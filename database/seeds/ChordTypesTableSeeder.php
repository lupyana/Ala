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
          'notes' => 'A - C - E - G',
          'othernames' => 'Am7 - Amin7 - A minor 7'
        ],
          [
          'notes' => 'A - C# - E - G#',
          'othernames' => 'AM7 - Amaj7 - A Major 7'
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
            'notes' => 'A - C - E - G',
            'othernames' => 'Am7 - Amin7 - A minor 7'
          ],
            [
            'notes' => 'A - C# - E - G#',
            'othernames' => 'AM7 - Amaj7 - A Major 7'
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
          'notes' => 'A - C - E - G',
          'othernames' => 'Am7 - Amin7 - A minor 7'
        ],
          [
          'notes' => 'A - C# - E - G#',
          'othernames' => 'AM7 - Amaj7 - A Major 7'
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
          'othernames' => 'Am7 - Amin7 - A minor 7'
        ],
          [
          'notes' => 'A - C# - E - G#',
          'othernames' => 'AM7 - Amaj7 - A Major 7'
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
