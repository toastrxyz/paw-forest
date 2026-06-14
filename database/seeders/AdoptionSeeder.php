<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdoptionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('adoptions')->insert([
            // Riga (Dzīvnieki 1,2,3 | Lietotāji 12,13,14 | Darbinieks Jānis ID 1)
            ['date' => now(), 'user_id' => 12, 'animal_id' => 1, 'employee_id' => 1, 'comment' => 'Ir pieredze ar lieliem suņiem.', 'status' => 'Approved'],
            ['date' => now(), 'user_id' => 13, 'animal_id' => 2, 'employee_id' => 1, 'comment' => 'Gaida mājas vizīti.', 'status' => 'Pending'],
            ['date' => now(), 'user_id' => 14, 'animal_id' => 3, 'employee_id' => 1, 'comment' => 'Nav piemēroti dzīves apstākļi.', 'status' => 'Rejected'],

            // Jurmala (Dzīvnieki 11,12,13 | Lietotāji 18,19,20 | Darbinieks Anete ID 4)
            ['date' => now(), 'user_id' => 18, 'animal_id' => 11, 'employee_id' => 4, 'comment' => 'Lieliska ģimene un privātmāja.', 'status' => 'Approved'],
            ['date' => now(), 'user_id' => 19, 'animal_id' => 12, 'employee_id' => 4, 'comment' => 'Tiek pārbaudīti dokumenti.', 'status' => 'Pending'],
            ['date' => now(), 'user_id' => 20, 'animal_id' => 13, 'employee_id' => 4, 'comment' => 'Saimniekam ir alerģija.', 'status' => 'Rejected'],

            // Valmiera (Dzīvnieki 21,22,23 | Lietotāji 24,25,26 | Darbinieks Mārtiņš ID 7)
            ['date' => now(), 'user_id' => 24, 'animal_id' => 21, 'employee_id' => 7, 'comment' => 'Suns veiksmīgi adoptēts.', 'status' => 'Approved'],
            ['date' => now(), 'user_id' => 25, 'animal_id' => 22, 'employee_id' => 7, 'comment' => 'Plānota intervija klātienē.', 'status' => 'Pending'],
            ['date' => now(), 'user_id' => 26, 'animal_id' => 23, 'employee_id' => 7, 'comment' => 'Nav sētas apkārt mājai.', 'status' => 'Rejected'],
        ]);
    }
}