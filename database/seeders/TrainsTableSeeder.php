<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $agency = ['Trenitalia', 'TrenoSud', 'TrenoNord', 'TrenoEst', 'TrenoOvest'];

        for ($i = 0; $i < 100; $i++){

            $new_train = new Train();
            $new_train->agency = $faker->randomElement($agency);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->datetime();
            $new_train->arrival_time = $faker->datetime();
            $new_train->code = $faker->numberBetween(0, 100);
            $new_train->number_of_carriages = $faker->numberBetween(0, 100);
            $new_train->delay = $faker->boolean();
            $new_train->deleted = $faker->boolean();

            $new_train->save();
        }
    }
}
