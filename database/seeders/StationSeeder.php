<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $newStation = new Station();
            $newStation->nome = $faker->firstName();
            $newStation->posizione = $faker->city();
            $newStation->numero_binari = $faker->numberBetween(1, 30);
            $newStation->orario_apertura = $faker->time();
            $newStation->orario_chiusura = $faker->time();
            $newStation->numero_negozi = $faker->numberBetween(1, 10);
            $newStation->save();

            
        }
    }
}
