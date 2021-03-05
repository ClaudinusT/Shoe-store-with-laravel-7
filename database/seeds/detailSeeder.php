<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transdetail')->insert([
            [
                'id' => '1',
                'transId' => '1',
                'shoeId' => '3',
                'qty' => 1
            ],
            [
                'id' => '2',
                'transId' => '1',
                'shoeId' => '1',
                'qty' => 2
            ],
            [
                'id' => '3',
                'transId' => '2',
                'shoeId' => '4',
                'qty' => 4
            ],
            [
                'id' => '4',
                'transId' => '2',
                'shoeId' => '2',
                'qty' => 1
            ],
            [
                'id' => '5',
                'transId' => '2',
                'shoeId' => '1',
                'qty' => 3
            ],
            [
                'id' => '6',
                'transId' => '3',
                'shoeId' => '6',
                'qty' => 3
            ],
            [
                'id' => '7',
                'transId' => '4',
                'shoeId' => '7',
                'qty' => 2
            ],
            [
                'id' => '8',
                'transId' => '5',
                'shoeId' => '5',
                'qty' => 1
            ],
            [
                'id' => '9',
                'transId' => '5',
                'shoeId' => '4',
                'qty' => 1
            ],
            [
                'id' => '10',
                'transId' => '6',
                'shoeId' => '3',
                'qty' => 3
            ],
            [
                'id' => '11',
                'transId' => '6',
                'shoeId' => '1',
                'qty' => 2
            ],
            [
                'id' => '12',
                'transId' => '7',
                'shoeId' => '1',
                'qty' => 2
            ],
            [
                'id' => '13',
                'transId' => '7',
                'shoeId' => '2',
                'qty' => 2
            ],
            [
                'id' => '14',
                'transId' => '7',
                'shoeId' => '3',
                'qty' => 2
            ],
        ]);
    }
}
