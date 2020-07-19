<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run()
    {
        DB::table('city')->insert([
            [
                'name' => 'Houston',
            ],
            [
                'name' => 'Los angeles',
            ],
            [
                'name' => 'Miami',
            ],
            [
                'name' => 'New york',
            ],
            [
                'name' => 'Orlando',
            ],
            [
                'name' => 'Washington',
            ],
        ]);
    }
}
