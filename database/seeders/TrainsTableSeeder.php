<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $train = new Train();

            $train->company = $faker->words(1, true);
            $train->train_code = $faker->numberBetween(1000,5000);
            $train->departure_station = $faker->words(2, true);
            $train->arrival_station = $faker->words(2, true);
            $train->departure_time = $faker->numberBetween(1,24) .':'. $faker->numberBetween(1,60) . ':00';
            $train->arrival_time = $faker->numberBetween(1,24) .':'. $faker->numberBetween(1,60) . ':00';
            $train->is_on_time = true;
            $train->is_cancelled = false;
            $train->carriages = $faker->numberBetween(1,20);

            $train->save();
            dump($train);
        }
    }

    // private function generateCode($train) {
    //     $train->train_code = $faker->numberBetween(1,20);
    //     $exist = Train::where('slug', $slug)->first();
    // }
}
