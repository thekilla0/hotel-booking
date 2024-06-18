<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('hotels')->insert([
            [
                'name' => 'Hotel California',
                'address' => '42 Sunset Boulevard, Los Angeles, CA',
                'phone' => '123-456-7890',
                'email' => 'contact@hotelcalifornia.com',
                'website' => 'http://hotelcalifornia.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Grand Budapest Hotel',
                'address' => '1 Royal Plaza, Budapest, Hungary',
                'phone' => '987-654-3210',
                'email' => 'info@grandbudapesthotel.com',
                'website' => 'http://grandbudapesthotel.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
