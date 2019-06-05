<?php

use Illuminate\Database\Seeder;

use App\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            [
                'state_id' => 1,
                'name' => 'acrelandia',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'state_id' => 1,
                'name' => 'rio branco',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'state_id' => 2,
                'name' => 'coari',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'state_id' => 2,
                'name' => 'manaus',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
