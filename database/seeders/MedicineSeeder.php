<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('medicines')->insert([
            // Riga (Dzīvnieki 3, 6, 10 | Darbinieks Laura - employees ID 2)
            ['animal_id' => 3, 'name' => 'Apoquel 5mg', 'description' => 'Alerģijas mazināšanai', 'method_of_use' => 'Orāli', 'frequency' => '1x dienā', 'date_from' => now(), 'date_until' => now()->addDays(7), 'employee_id' => 2],
            ['animal_id' => 6, 'name' => 'Wormil', 'description' => 'Prettārpu tablete', 'method_of_use' => 'Orāli', 'frequency' => 'Vienreizēji', 'date_from' => now(), 'date_until' => now(), 'employee_id' => 2],
            ['animal_id' => 10, 'name' => 'Acu pilieni', 'description' => 'Iekaisuma ārstēšanai', 'method_of_use' => 'Pilieni', 'frequency' => '3x dienā', 'date_from' => now(), 'date_until' => now()->addDays(5), 'employee_id' => 2],
            ['animal_id' => 3, 'name' => 'Vitamīni', 'description' => 'Imunitātes stiprināšanai', 'method_of_use' => 'Ar pārtiku', 'frequency' => '1x dienā', 'date_from' => now(), 'date_until' => now()->addDays(30), 'employee_id' => 2],

            // Jurmala (Dzīvnieki 13, 17 | Darbinieks Kārlis - employees ID 5)
            ['animal_id' => 13, 'name' => 'Painkiller', 'description' => 'Pretsāpju pēc operācijas', 'method_of_use' => 'Injekcija', 'frequency' => '1x dienā', 'date_from' => now(), 'date_until' => now()->addDays(3), 'employee_id' => 5],
            ['animal_id' => 17, 'name' => 'Ausu pilieni', 'description' => 'Ausu ērču ārstēšana', 'method_of_use' => 'Pilieni ausīs', 'frequency' => '2x dienā', 'date_from' => now(), 'date_until' => now()->addDays(14), 'employee_id' => 5],
            ['animal_id' => 13, 'name' => 'Wormil', 'description' => 'Prettārpu tablete', 'method_of_use' => 'Orāli', 'frequency' => 'Vienreizēji', 'date_from' => now(), 'date_until' => now(), 'employee_id' => 5],
            ['animal_id' => 17, 'name' => 'Antibiotikas', 'description' => 'Pret infekciju', 'method_of_use' => 'Orāli', 'frequency' => '2x dienā', 'date_from' => now(), 'date_until' => now()->addDays(7), 'employee_id' => 5],

            // Valmiera (Dzīvnieki 23, 27 | Darbinieks Ilze - employees ID 8)
            ['animal_id' => 23, 'name' => 'Apoquel 10mg', 'description' => 'Ādas alerģijām', 'method_of_use' => 'Orāli', 'frequency' => '1x dienā', 'date_from' => now(), 'date_until' => now()->addDays(10), 'employee_id' => 8],
            ['animal_id' => 27, 'name' => 'Wormil', 'description' => 'Prettārpu kurss', 'method_of_use' => 'Orāli', 'frequency' => 'Vienreizēji', 'date_from' => now(), 'date_until' => now(), 'employee_id' => 8],
            ['animal_id' => 23, 'name' => 'Ziede', 'description' => 'Brūces apstrādei', 'method_of_use' => 'Uz ādas', 'frequency' => '2x dienā', 'date_from' => now(), 'date_until' => now()->addDays(5), 'employee_id' => 8],
            ['animal_id' => 27, 'name' => 'Sirds pilieni', 'description' => 'Sirdsdarbības regulēšanai', 'method_of_use' => 'Orāli', 'frequency' => '1x dienā', 'date_from' => now(), 'date_until' => now()->addDays(20), 'employee_id' => 8],
        ]);
    }
}