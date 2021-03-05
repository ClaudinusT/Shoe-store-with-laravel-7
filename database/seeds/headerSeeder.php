<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class headerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transheader')->insert([
            [
                'id' => '1',
                'userId' => '3',
                'Date' => '2020-12-18 16:03:29',
                'status' => 'completed'
            ],
            [
                'id' => '2',
                'userId' => '3',
                'Date' => '2020-12-20 12:03:00',
                'status' => 'completed'
            ],
            [
                'id' => '3',
                'userId' => '3',
                'Date' => '2020-12-20 13:03:29',
                'status' => 'not complete'
            ],
            [
                'id' => '4',
                'userId' => '4',
                'Date' => '2020-12-19 15:45:29',
                'status' => 'completed'
            ],
            [
                'id' => '5',
                'userId' => '4',
                'Date' => '2020-12-19 18:02:11',
                'status' => 'completed'
            ],
            [
                'id' => '6',
                'userId' => '4',
                'Date' => '2020-12-21 19:12:14',
                'status' => 'completed'
            ],
            [
                'id' => '7',
                'userId' => '4',
                'Date' => '2020-12-21 21:43:23',
                'status' => 'not complete'
            ],

        ]);
    }
}
