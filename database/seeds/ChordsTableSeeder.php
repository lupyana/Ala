<?php

use Illuminate\Database\Seeder;
use App\Chord;
class ChordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

      $chords =[
          [
            'name' => 'A',
            'version' => '1',
            'diagram' => '',
            'instrument' => 'Guitar',
            'desctription' => ''
          ],
          [
            'name' => 'A#',
            'version' => '1',
            'diagram' => '',
            'instrument' => 'Guitar',
            'desctription' => ''
          ],
          [
            'name' => 'B',
            'version' => '1',
            'diagram' => '',
            'instrument' => 'Guitar',
            'desctription' => ''
          ],
          [
            'name' => 'C',
            'version' => '1',
            'diagram' => '',
            'instrument' => 'Guitar',
            'desctription' => ''
          ],
          [
              'name' => 'C#',
              'version' => '1',
              'diagram' => '',
              'instrument' => 'Guitar',
              'desctription' => ''
            ],
          [
            'name' => 'D',
            'version' => '1',
            'diagram' => '',
            'instrument' => 'Guitar',
            'desctription' => ''
          ],
          [
              'name' => 'D#',
              'version' => '1',
              'diagram' => '',
              'instrument' => 'Guitar',
              'desctription' => ''
            ],
           [
              'name' => 'E',
              'version' => '1',
              'diagram' => '',
              'instrument' => 'Guitar',
              'desctription' => ''
            ],
            [
              'name' => 'F',
              'version' => '1',
              'diagram' => '',
              'instrument' => 'Guitar',
              'desctription' => ''
            ],
            [
                'name' => 'F#',
                'version' => '1',
                'diagram' => '',
                'instrument' => 'Guitar',
                'desctription' => ''
              ],
            [
              'name' => 'G',
              'version' => '1',
              'diagram' => '',
              'instrument' => 'Guitar',
              'desctription' => ''
            ],
             [
                'name' => 'G#',
                'version' => '1',
                'diagram' => '',
                'instrument' => 'Guitar',
                'desctription' => ''
              ]

        ];
        foreach($chords as $chord){
            Chord::create($chord);
        }
        // Chord::insert($chords);
    }
}
