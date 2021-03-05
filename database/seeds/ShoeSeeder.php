<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shoes')->insert([
            [
                'id' => '1',
                'shoeName' => 'Nike AirForce One X OFF WHITE',
                'description' => 'These shoes must be very expensive',
                'price' => 10000000,
                'image' => 'nike1.png'
            ],
            [
                'id' => '2',
                'shoeName' => 'Nike Adapt BB',
                'description' => 'Future looking shoes',
                'price' => 8000000,
                'image' => 'nike2.jpg'
            ],
            [
                'id' => '3',
                'shoeName' => 'Nike LeBron 17 Low PH',
                'description' => 'Collector items',
                'price' => 2389000,
                'image' => 'nike3.jpg'
            ],
            [
                'id' => '4',
                'shoeName' => 'Nike Zoom Freak 2',
                'description' => 'Made for basketball lovers',
                'price' => 1799000,
                'image' => 'nike4.jpg'
            ],
            [
                'id' => '5',
                'shoeName' => 'Nike Jordan XXXV PF',
                'description' => 'Nike running for speed',
                'price' => 2599000,
                'image' => 'nike5.jpg'
            ],
            [
                'id' => '6',
                'shoeName' => 'Nike Kybrid S2 EP',
                'description' => 'Artist made shoes',
                'price' => 2000000,
                'image' => 'nike6.jpg'
            ],
            [
                'id' => '7',
                'shoeName' => 'Nike Metcon 6',
                'description' => 'Best Shoes for sports',
                'price' => 1979000,
                'image' => 'nike7.jpg'
            ],
        ]);
    }
}
