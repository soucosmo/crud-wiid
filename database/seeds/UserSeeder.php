<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'administrador',
            'email' => 'admin@admin.com',
            'document' => '123.456.789-10',
            'birth' => now()->subYears(22),
            'address' => 'rua abc, numero 125.',
            'password' => Hash::make(12345678),
            'is_admin' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
