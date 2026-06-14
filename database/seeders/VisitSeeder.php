<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('visits')->insert([
            // Riga (Lokācija 1 | Lietotāji 10-15 | Dzīvnieki 1-6 | Darbinieks Artūrs ID 3)
            ['date' => now(), 'user_id' => 10, 'animal_id' => 1, 'location_id' => 1, 'employee_id' => 3, 'comment' => 'Pirmā iepazīšanās ar suni.'],
            ['date' => now(), 'user_id' => 11, 'animal_id' => 2, 'location_id' => 1, 'employee_id' => 3, 'comment' => 'Kaķa socializācija un spēles.'],
            ['date' => now(), 'user_id' => 12, 'animal_id' => 3, 'location_id' => 1, 'employee_id' => 3, 'comment' => 'Pastaiga pa parku.'],
            ['date' => now(), 'user_id' => 13, 'animal_id' => 4, 'location_id' => 1, 'employee_id' => 3, 'comment' => 'Atveda mīkstās rotaļlietas.'],
            ['date' => now(), 'user_id' => 14, 'animal_id' => 5, 'location_id' => 1, 'employee_id' => 3, 'comment' => 'Atnāca kopā ar bērniem.'],
            ['date' => now(), 'user_id' => 15, 'animal_id' => 6, 'location_id' => 1, 'employee_id' => 3, 'comment' => 'Saimnieka un kaķa saderības tests.'],

            // Jurmala (Lokācija 2 | Lietotāji 16-21 | Dzīvnieki 11-16 | Darbinieks Kristīne ID 6)
            ['date' => now(), 'user_id' => 16, 'animal_id' => 11, 'location_id' => 2, 'employee_id' => 6, 'comment' => 'Apskatīja kaķēnus.'],
            ['date' => now(), 'user_id' => 17, 'animal_id' => 12, 'location_id' => 2, 'employee_id' => 6, 'comment' => 'Suņa skološana un pastaiga.'],
            ['date' => now(), 'user_id' => 18, 'animal_id' => 13, 'location_id' => 2, 'employee_id' => 6, 'comment' => 'Atveda barību patversmei.'],
            ['date' => now(), 'user_id' => 19, 'animal_id' => 14, 'location_id' => 2, 'employee_id' => 6, 'comment' => 'Iepazīšanās vizīte pirms adopcijas.'],
            ['date' => now(), 'user_id' => 20, 'animal_id' => 15, 'location_id' => 2, 'employee_id' => 6, 'comment' => 'Pavada laiku ar kaķi.'],
            ['date' => now(), 'user_id' => 21, 'animal_id' => 16, 'location_id' => 2, 'employee_id' => 6, 'comment' => 'Potenciālā saimnieka intervija.'],

            // Valmiera (Lokācija 3 | Lietotāji 22-27 | Dzīvnieki 21-26 | Darbinieks Gints ID 9)
            ['date' => now(), 'user_id' => 22, 'animal_id' => 21, 'location_id' => 3, 'employee_id' => 9, 'comment' => 'Pirmā tikšanās ar dzīvnieku.'],
            ['date' => now(), 'user_id' => 23, 'animal_id' => 22, 'location_id' => 3, 'employee_id' => 9, 'comment' => 'Skraidīšana ar suni laukumā.'],
            ['date' => now(), 'user_id' => 24, 'animal_id' => 23, 'location_id' => 3, 'employee_id' => 9, 'comment' => 'Kaķa ķemmēšana.'],
            ['date' => now(), 'user_id' => 25, 'animal_id' => 24, 'location_id' => 3, 'employee_id' => 9, 'comment' => 'Atveda siltas segas ziemai.'],
            ['date' => now(), 'user_id' => 26, 'animal_id' => 25, 'location_id' => 3, 'employee_id' => 9, 'comment' => 'Pastaiga mežā.'],
            ['date' => now(), 'user_id' => 27, 'animal_id' => 26, 'location_id' => 3, 'employee_id' => 9, 'comment' => 'Iepazīstināja savu otru suni ar šo.']
        ]);
    }
}