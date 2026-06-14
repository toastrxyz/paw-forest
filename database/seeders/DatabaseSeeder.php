<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
    $this->call([
    LocationSeeder::class,
    EmployeeSeeder::class, 
    UserSeeder::class, 
    AnimalSeeder::class,
    DonationSeeder::class,
    AdoptionSeeder::class,
    MedicineSeeder::class,
    VisitSeeder::class,
]);
}
}
