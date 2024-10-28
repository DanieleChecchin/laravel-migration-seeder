<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 20; $i++) { 
            $newTicket = new Ticket();
            $newTicket->id_passeggero = $faker->numberBetween(10, 50);
            $newTicket->nome_passeggero = $faker->firstName();
            $newTicket->cognome_passeggero = $faker->lastName();
            $newTicket->id_treno = $faker->numberBetween(10, 50);
            $newTicket->stazione_partenza = $faker->firstName();
            $newTicket->stazione_arrivo = $faker->firstName();
            $newTicket->prezzo = $faker->randomFloat(2, 0, 999);
            $newTicket->save();
        }
    }
}
