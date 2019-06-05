<?php

use Illuminate\Database\Seeder;

use App\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([
            [
                'name' => 'acre',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'amazonas',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
