<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('users')->insert([
            [
                'username' => 'andi',
                'email' => 'andi@gmail.com',
                'password' => bcrypt('andi123'),
                'role' => 'admin',
            ],
            [
                'username' => 'budi',
                'email' => 'budi@gmail.com',
                'password' => bcrypt('budi123'),
                'role' => 'admin',
            ],
            [
                'username' => 'tonto',
                'email' => 'tonto@gmail.com',
                'password' => bcrypt('tonto123'),
                'role' => 'member',
            ],

            [
                'username' => 'alan',
                'email' => 'alan@gmail.com',
                'password' => bcrypt('alan123'),
                'role' => 'member',
            ],
        ]);
    }
}
