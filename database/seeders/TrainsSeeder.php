<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $trains = [
        //     [
        //         'id' => 1,
        //         'azienda' => 'Suzuki',
        //         'stazione partenza' => 'Roma',
        //         'stazione arrivo' => 'Milano',
        //         'ora partenza' => '10:00',
        //         'ora arrivo' => '12:00',
        //         'codice treno' => 'SZ-123',
        //         'carrozze' => '3',
        //         'in orario' => false,
        //         'cancellato' => false,
        //     ]
        // ];
                
        for($i = 0; $i < 10; $i++) {
            // Train::create($train);
            Train::create([
                'id' => $i,
                'azienda' => $faker->bothify('?????-##'),
                'stazione_partenza' => $faker->address(),
                'stazione_arrivo' => $faker->city(),
                'ora_partenza' => $faker->time(),
                'ora_arrivo' => $faker->time(),
                'codice_treno' => $faker->bothify('??-####'),
                'carrozze' => $faker->randomNumber(1,10) ,
                'in_orario' => $faker->boolean(),
                'cancellato' => $faker->boolean(),
            ]);
        }
    }
}