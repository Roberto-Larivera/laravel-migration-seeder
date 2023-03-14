<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


//Models
use App\Models\Train;

// Class
use Faker\Generator as Faker;
use Carbon\Carbon;

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

        for ($i = 0; $i < 500; $i++) {
            $newTrain = new Train;
            $newTrain->agency = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();

            // chiedere ai tutor perchè non funziona questo ciclo while , e perchè ho dovuto invertire le variabili nelle assegnazioni delle classi
           
            $newDateTime = $faker->dateTimeBetween('-1 days', '+2 days');

            do {

                $newDateTimeArrival = $faker->dateTimeBetween('-1 days', '+1 days');

            } while ($newDateTimeArrival > $newDateTime);
            


            $newTrain->departure_date = Carbon::parse($newDateTimeArrival)->format('Y-m-d');
            $newTrain->departure_time = Carbon::parse($newDateTimeArrival)->format('H:i:s');
            $newTrain->arrival_date = Carbon::parse($newDateTime)->format('Y-m-d');
            $newTrain->arrival_time = Carbon::parse($newDateTime)->format('H:i:s');

            // UTILIZZATO PER STAMPARE UN ORARIO RANDOM O UNA DATA RANDOM CON UN MIX E MAX
            /*
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->departure_date = $faker->dateTimeInInterval('0 days', '+1 days');
            $newTrain->arrival_date = $faker->dateTimeInInterval('0 days', '+1 days');
            */

            $newTrain->train_code = $faker->numberBetween(10000, 59999);
            $newTrain->carriages_number = $faker->numberBetween(1, 10);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();

            // UTILIZZATO PER STAMPARE UN DATATIME RANDOM CON UN MIN E UN MAX -- PROVA, *** UTILIZZATO
            /*
            $newTrain->datagiorno = $faker->dateTimeBetween('-1 days', '+2 days');
            */

            $newTrain->save();
        }
    }
}
