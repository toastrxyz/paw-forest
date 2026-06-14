<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('locations')->insert([
            ['id' => 1, 'name' => 'Riga Shelter', 'address' => 'Meža iela 4, Rīga'],
            ['id' => 2, 'name' => 'Jurmala Shelter', 'address' => 'Kāpu iela 12, Jūrmala'],
            ['id' => 3, 'name' => 'Valmiera Shelter', 'address' => 'Rīgas iela 89, Valmiera'],
        ]);
    }
}