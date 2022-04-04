<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert(
            [
                [
                    'name' => 'Miglan',
                    'lastname' => 'Castillo',
                    'email' => 'miglan.castillo@itca.edu.sv',
                    'email_verified_at' => now(),
                    'password' => md5('1234'),
                    'remember_token' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
