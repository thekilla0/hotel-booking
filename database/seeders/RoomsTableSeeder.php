<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'hotel_id' => 1,
                'room_number' => '101',
                'type' => 'Single',
                'price' => 100.00,
                'description' => 'A cozy single room with a beautiful view.',
                'capacity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 1,
                'room_number' => '102',
                'type' => 'Double',
                'price' => 150.00,
                'description' => 'A spacious double room perfect for couples.',
                'capacity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hotel_id' => 2,
                'room_number' => '201',
                'type' => 'Suite',
                'price' => 300.00,
                'description' => 'A luxurious suite with all amenities.',
                'capacity' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
