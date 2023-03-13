<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Models\Train;

class TrainsTableSleeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // php artisan db:seed --class=TrainsTableSleeder

        for ($i=0; $i < 100; $i++) { 
            $newTrain = new Train;
            $newTrain->agency = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->departure_date = $faker->date();
            $newTrain->arrival_date = $faker->date();
            $newTrain->train_code = $faker->numberBetween(10000, 59999);
            $newTrain->carriages_number = $faker->numberBetween(1, 10);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
