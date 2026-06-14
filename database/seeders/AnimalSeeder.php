<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    public function run(): void
    {
        // RIGA SHELTER (location_id: 1, ID 1-10)
        Animal::create(['id' => 1, 'name' => 'Reksis', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'German Shepherd', 'age' => 3, 'location_id' => 1, 'image' => 'images/reksis.jpg', 'date_added' => now()]);
        Animal::create(['id' => 2, 'name' => 'Mince', 'health_status' => 'Healthy', 'gender' => 'Female', 'species' => 'Cat', 'breed' => 'Siamese', 'age' => 2, 'location_id' => 1, 'image' => 'images/mince.jpg', 'date_added' => now()]);
        Animal::create(['id' => 3, 'name' => 'Lācis', 'health_status' => 'Treated', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Rottweiler', 'age' => 5, 'location_id' => 1, 'image' => 'images/lacis.jpg', 'date_added' => now()]);
        Animal::create(['id' => 4, 'name' => 'Pūka', 'health_status' => 'Healthy', 'gender' => 'Female', 'species' => 'Cat', 'breed' => 'Persian', 'age' => 1, 'location_id' => 1, 'image' => 'images/puka.jpg', 'date_added' => now()]);
        Animal::create(['id' => 5, 'name' => 'Bosis', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Bulldog', 'age' => 4, 'location_id' => 1, 'image' => 'images/bosis.jpg', 'date_added' => now()]);
        Animal::create(['id' => 6, 'name' => 'Muris', 'health_status' => 'Under Observation', 'gender' => 'Male', 'species' => 'Cat', 'breed' => 'European Short-hair', 'age' => 6, 'location_id' => 1, 'image' => 'images/muris.jpg', 'date_added' => now()]);
        Animal::create(['id' => 7, 'name' => 'Džeks', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Beagle', 'age' => 2, 'location_id' => 1, 'image' => 'images/dzeks.jpg', 'date_added' => now()]);
        Animal::create(['id' => 8, 'name' => 'Sāra', 'health_status' => 'Healthy', 'gender' => 'Female', 'species' => 'Dog', 'breed' => 'Golden Retriever', 'age' => 1, 'location_id' => 1, 'image' => 'images/sara.jpg', 'date_added' => now()]);
        Animal::create(['id' => 9, 'name' => 'Simba', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Cat', 'breed' => 'Maine Coon', 'age' => 3, 'location_id' => 1, 'image' => 'images/simba.jpg', 'date_added' => now()]);
        Animal::create(['id' => 10, 'name' => 'Bella', 'health_status' => 'Treated', 'gender' => 'Female', 'species' => 'Dog', 'breed' => 'Poodle', 'age' => 2, 'location_id' => 1, 'image' => 'images/bella.jpg', 'date_added' => now()]);

        // JURMALA SHELTER (location_id: 2, ID 11-20)
        Animal::create(['id' => 11, 'name' => 'Sniedziņš', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Cat', 'breed' => 'Angora', 'age' => 2, 'location_id' => 2, 'image' => 'images/sniedzins.jpg', 'date_added' => now()]);
        Animal::create(['id' => 12, 'name' => 'Milo', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Jack Russell', 'age' => 1, 'location_id' => 2, 'image' => 'images/milo.jpg', 'date_added' => now()]);
        Animal::create(['id' => 13, 'name' => 'Rūdis', 'health_status' => 'Treated', 'gender' => 'Male', 'species' => 'Cat', 'breed' => 'British Shorthair', 'age' => 4, 'location_id' => 2, 'image' => 'images/rudis.jpg', 'date_added' => now()]);
        Animal::create(['id' => 14, 'name' => 'Luna', 'health_status' => 'Healthy', 'gender' => 'Female', 'species' => 'Dog', 'breed' => 'Husky', 'age' => 3, 'location_id' => 2, 'image' => 'images/luna.jpg', 'date_added' => now()]);
        Animal::create(['id' => 15, 'name' => 'Koko', 'health_status' => 'Healthy', 'gender' => 'Female', 'species' => 'Cat', 'breed' => 'Sphynx', 'age' => 5, 'location_id' => 2, 'image' => 'images/koko.jpg', 'date_added' => now()]);
        Animal::create(['id' => 16, 'name' => 'Zevs', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Boxer', 'age' => 6, 'location_id' => 2, 'image' => 'images/zevs.jpg', 'date_added' => now()]);
        Animal::create(['id' => 17, 'name' => 'Čārlijs', 'health_status' => 'Under Observation', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Corgi', 'age' => 2, 'location_id' => 2, 'image' => 'images/carlijs.jpg', 'date_added' => now()]);
        Animal::create(['id' => 18, 'name' => 'Nala', 'health_status' => 'Healthy', 'gender' => 'Female', 'species' => 'Cat', 'breed' => 'Bengal', 'age' => 1, 'location_id' => 2, 'image' => 'images/nala.jpg', 'date_added' => now()]);
        Animal::create(['id' => 19, 'name' => 'Remo', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Doberman', 'age' => 4, 'location_id' => 2, 'image' => 'images/remo.jpg', 'date_added' => now()]);
        Animal::create(['id' => 20, 'name' => 'Fēlikss', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Cat', 'breed' => 'Tuxedo Cat', 'age' => 3, 'location_id' => 2, 'image' => 'images/felikss.jpg', 'date_added' => now()]);

        // VALMIERA SHELTER (location_id: 3, ID 21-30)
        Animal::create(['id' => 21, 'name' => 'Bulta', 'health_status' => 'Healthy', 'gender' => 'Female', 'species' => 'Dog', 'breed' => 'Greyhound', 'age' => 2, 'location_id' => 3, 'image' => 'images/bulta.jpg', 'date_added' => now()]);
        Animal::create(['id' => 22, 'name' => 'Garsils', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Cat', 'breed' => 'Scottish Fold', 'age' => 4, 'location_id' => 3, 'image' => 'images/garsils.jpg', 'date_added' => now()]);
        Animal::create(['id' => 23, 'name' => 'Tofiks', 'health_status' => 'Treated', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Chihuahua', 'age' => 5, 'location_id' => 3, 'image' => 'images/tofiks.jpg', 'date_added' => now()]);
        Animal::create(['id' => 24, 'name' => 'Mora', 'health_status' => 'Healthy', 'gender' => 'Female', 'species' => 'Dog', 'breed' => 'Labrador', 'age' => 3, 'location_id' => 3, 'image' => 'images/mora.jpg', 'date_added' => now()]);
        Animal::create(['id' => 25, 'name' => 'Oskars', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Cat', 'breed' => 'Abyssinian', 'age' => 1, 'location_id' => 3, 'image' => 'images/oskars.jpg', 'date_added' => now()]);
        Animal::create(['id' => 26, 'name' => 'Grants', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Great Dane', 'age' => 6, 'location_id' => 3, 'image' => 'images/grants.jpg', 'date_added' => now()]);
        Animal::create(['id' => 27, 'name' => 'Sinnija', 'health_status' => 'Under Observation', 'gender' => 'Female', 'species' => 'Cat', 'breed' => 'Ragdoll', 'age' => 2, 'location_id' => 3, 'image' => 'images/sinnija.jpg', 'date_added' => now()]);
        Animal::create(['id' => 28, 'name' => 'Piko', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Spitz', 'age' => 1, 'location_id' => 3, 'image' => 'images/piko.jpg', 'date_added' => now()]);
        Animal::create(['id' => 29, 'name' => 'Viko', 'health_status' => 'Healthy', 'gender' => 'Male', 'species' => 'Dog', 'breed' => 'Dalmatian', 'age' => 4, 'location_id' => 3, 'image' => 'images/viko.jpg', 'date_added' => now()]);
        Animal::create(['id' => 30, 'name' => 'Kleopatra', 'health_status' => 'Healthy', 'gender' => 'Female', 'species' => 'Cat', 'breed' => 'Burmese', 'age' => 3, 'location_id' => 3, 'image' => 'images/kleopatra.jpg', 'date_added' => now()]);
    }
}