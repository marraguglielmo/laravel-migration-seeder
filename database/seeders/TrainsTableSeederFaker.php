<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */

    //  passo una nuova istanza del faker come parametro del metodo run()
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train->company = $faker->words(3, true);
            $new_train->slug = $this->generateSlug($new_train->company, $new_train->code);
            $new_train->conductor = $faker->name();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->ticket_price = $faker->randomFloat(2 ,10, 500);
            $new_train->code = $faker->bothify('??###');
            $new_train->coaches_number = $faker->numberBetween(5, 20);
            $new_train->is_on_time =$faker->boolean();
            $new_train->is_cancelled = $faker->boolean();

            dump($new_train);

            $new_train->save();
        }
    }

    private function generateSlug($string1, $string2){
        $slug = Str::of($string1 . ' ' . $string2)->slug('-');
        $original_slug = $slug;

        $exist = Train::where('slug', $slug)->first();
        dump($exist);

        $count = 1;
        while($exist){
            $slug = $original_slug . '-' . $count;
            $exist = Train::where('slug', $slug)->first();
            $count++;
        }

        return $slug;

    }
}
