<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'company' => 'Frecciarossa',
                'conductor' => 'Giuseppe Rossi',
                'departure_station' => 'Lecce',
                'arrival_station' => 'Brindisi',
                'departure_time' => '09:30:00',
                'arrival_time' => '11:10:00',
                'ticket_price' => 15.00,
                'code' => 'FR152',
                'coaches_number' => '10',
                'is_on_time' => true,
                'is_cancelled' => false
            ],
            [
                'company' => 'Frecciargento',
                'conductor' => 'Pinco Pallino',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '08:00:00',
                'arrival_time' => '10:40:00',
                'ticket_price' => 55.00,
                'code' => 'FA412',
                'coaches_number' => '14',
                'is_on_time' => false,
                'is_cancelled' => false
            ],
            [
                'company' => 'Eurostar',
                'conductor' => 'Giorgio Ponzo',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Palermo Centrale',
                'departure_time' => '11:30:00',
                'arrival_time' => '15:45:00',
                'ticket_price' => 43.50,
                'code' => 'EU860',
                'coaches_number' => '9',
                'is_on_time' => false,
                'is_cancelled' => true
            ],
            [
                'company' => 'Regionale',
                'conductor' => 'Mario Rossi',
                'departure_station' => 'Firenze Santa Maria Novella',
                'arrival_station' => 'Bologna Centrale',
                'departure_time' => '14:15:00',
                'arrival_time' => '17:00:00',
                'ticket_price' => 28.30,
                'code' => 'EU860',
                'coaches_number' => '9',
                'is_on_time' => true,
                'is_cancelled' => false
            ],
        ];


        foreach($data as $item){
            $new_train = new Train();
            $new_train->company = $item['company'];
            $new_train->slug = Str::of($item['company'] . ' ' . $item['code'])->slug('-');
            $new_train->conductor = $item['conductor'];
            $new_train->departure_station = $item['departure_station'];
            $new_train->arrival_station = $item['arrival_station'];
            $new_train->departure_time = $item['departure_time'];
            $new_train->arrival_time = $item['arrival_time'];
            $new_train->ticket_price = $item['ticket_price'];
            $new_train->code = $item['code'];
            $new_train->coaches_number = $item['coaches_number'];
            $new_train->is_on_time = $item['is_on_time'];
            $new_train->is_cancelled = $item['is_cancelled'];

            // dump($new_train);

            $new_train->save();

        }

    }
}
