<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        dump('Prova seeder ☻');
        $data = [
            [
                'company' => 'Frecciarossa',
                'conductor' => 'Giuseppe Rossi',
                'departure_station' => 'Lecce',
                'arrival_station' => 'Brindisi',
                'departure_time' => '2024-05-14 09:30:00',
                'arrival_time' => '2024-05-14 11:10:00',
                'ticket_price' => 15.00,
                'code' => 'FR152',
                'coaches_number' => '10',
                'is_on_time' => true,
                'is_cancelled' => false
            ]
        ];
    }
}
