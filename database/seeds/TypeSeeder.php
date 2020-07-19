<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('type')->insert([
            [
                'name' => 'Apartamento',
            ],
            [
                'name' => 'Casa',
            ],
            [
                'name' => 'Casa de Campo',
            ],
        ]);
    }
}
