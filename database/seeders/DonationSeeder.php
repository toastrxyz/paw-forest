<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('donations')->insert([
            // Riga (Lietotāji 10, 11)
            ['user_id' => 10, 'amount' => '50.00', 'method_of_payment' => 'Card', 'message' => 'Sveiciens Reksim!', 'date' => now()],
            ['user_id' => 11, 'amount' => '25.00', 'method_of_payment' => 'PayPal', 'message' => 'Pārtikai un priekam', 'date' => now()],
            // Jurmala (Lietotāji 16, 17)
            ['user_id' => 16, 'amount' => '120.00', 'method_of_payment' => 'Card', 'message' => 'Jūrmalas ķepām', 'date' => now()],
            ['user_id' => 17, 'amount' => '35.00', 'method_of_payment' => 'Card', 'message' => 'Kaķu mājai', 'date' => now()],
            // Valmiera (Lietotāji 22, 23)
            ['user_id' => 22, 'amount' => '40.00', 'method_of_payment' => 'PayPal', 'message' => 'Atbalsts no Valmieras', 'date' => now()],
            ['user_id' => 23, 'amount' => '80.00', 'method_of_payment' => 'Card', 'message' => 'Zālēm un operācijām', 'date' => now()],
        ]);
    }
}