<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Trein;


class TreinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<=10; $i++){

            $newTrein = new Trein();
            $newTrein->azienda = $faker->company();
            $newTrein->stazione_di_partenza = $faker->city();
            $newTrein->stazione_di_arrivo = $faker->city();
            $newTrein->orario_di_partenza = $faker->time('H:i');
            $newTrein->orario_di_arrivo = $faker->time('H:i');
            $newTrein->codice_treno = $faker->numerify('');
            $newTrein->numero_carrozze = $faker->randomDigit('ct-????');
            $newTrein->treno_in_orario = $faker->randomElement([true, false]);
            $newTrein->treno_cancellato = $faker->randomElement([true, false]);
            $newTrein->save();
        }
    }
}
