<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('locations')->insert([
            ['id' => 1, 'name' => 'Rīgas patversme', 'address' => 'Brīvības iela 100, Rīga'],
            ['id' => 2, 'name' => 'Liepājas patversme', 'address' => 'Roņu iela 5, Liepāja'],
            ['id' => 3, 'name' => 'Daugavpils patversme', 'address' => '18. novembra iela 50, Daugavpils'],
        ]);
    }
}