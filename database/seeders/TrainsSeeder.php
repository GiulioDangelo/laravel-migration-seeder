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
            Train::creare([
                'id' => $faker->rand(1,100),
                'azienda' => $faker->bothify('?????-##'),
                'stazione partenza' => $faker->address(),
                'stazione arrivo' => $faker->city(),
                'ora partenza' => $faker->time(),
                'ora arrivo' => $faker->time(),
                'codice treno' => $faker->bothify('??-####'),
                'carrozze' => $faker->rand(1,10) ,
                'in orario' => $faker->boolean(),
                'cancellato' => $faker->boolean(),
            ]);
        }
    }
}