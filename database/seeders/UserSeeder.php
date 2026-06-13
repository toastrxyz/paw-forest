<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'id' => 1,
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@test.lv',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'address' => 'Rīga',
                'is_blocked' => false,
                'date_joined' => now(),
            ],

            [
                'id' => 2,
                'name' => 'Jānis Bērziņš',
                'username' => 'janis1',
                'email' => 'janis@mail.lv',
                'password' => Hash::make('password'),
                'role' => 'user',
                'address' => 'Rīga',
                'is_blocked' => false,
                'date_joined' => now(),
            ],
        ]);
    }
}