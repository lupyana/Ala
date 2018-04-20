<?php

use Illuminate\Database\Seeder;
use App\Scale;

class ScalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $scales =[
          [
            'key' => 'A',
            'type' => 'Major',
            'position' => '1',
            'diagram' => '',
            'instrument' => 'Guitar',
            'desctription' => 'lorem lorem lorem lorem'
          ],
          [
            'key' => 'B',
            'type' => 'Major',
            'position' => '1',
            'diagram' => '',
            'instrument' => 'Guitar',
            'desctription' => 'lorem lorem lorem lorem'
          ],
          [
            'key' => 'C',
            'type' => 'Major',
            'position' => '1',
            'diagram' => '',
            'instrument' => 'Guitar',
            'desctription' => 'lorem lorem lorem lorem'
          ],
          [
            'key' => 'D',
            'type' => 'Major',
            'position' => '1',
            'diagram' => '',
            'instrument' => 'Guitar',
            'desctription' => 'lorem lorem lorem lorem'
          ],
           [
              'key' => 'E',
              'type' => 'Major',
              'position' => '1',
              'diagram' => '',
              'instrument' => 'Guitar',
              'desctription' => 'lorem lorem lorem lorem'
            ],
            [
              'key' => 'F',
              'type' => 'Major',
              'position' => '1',
              'diagram' => '',
              'instrument' => 'Guitar',
              'desctription' => 'lorem lorem lorem lorem'
            ],
            [
              'key' => 'G',
              'type' => 'Major',
              'position' => '1',
              'diagram' => '',
              'instrument' => 'Guitar',
              'desctription' => 'lorem lorem lorem lorem'
            ]

        ];
        foreach($scales as $scale){
            Scale::create($scale);
        }
    }
}
