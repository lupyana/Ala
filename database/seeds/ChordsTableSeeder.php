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
            'name' => 'A'

          ],
          [
            'name' => 'B'

          ],
          [
            'name' => 'C'

          ],
          [
            'name' => 'D'

          ]


        ];

        $types =[
            [
              'name' => 'Major',
              'intervals' => '1 - 3 - 5',
              'notes' => '',
              'othernames' => '',
              'instrument' => 'Guitar'

            ],
            [
              'name' => 'Minor',
              'intervals' => '1 - b3 - 5',
              'notes' => '',
              'othernames' => '',
              'instrument' => 'Guitar'

            ],
            [
              'name' => 'Major 7',
              'intervals' => '1 - 3 - 5 - 7',
              'notes' => '',
              'othernames' => '',
              'instrument' => 'Guitar'
            ],
            [
              'name' => 'Minor 7',
              'intervals' => '1 - b3 - 5 - b7',
              'notes' => '',
              'othernames' => '',
              'instrument' => 'Guitar'

            ]


          ];

        foreach($chords as $chord){
            $c = Chord::create($chord);
            // $c = new ChordType();
            foreach($types as $type){
                $c->chordtypes()->create($type);
            }


        }
        // Chord::insert($chords);
    }
}
