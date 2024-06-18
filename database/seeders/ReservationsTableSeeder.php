<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reservations')->insert([
            [
                'room_id' => 1,
                'checkin_date' => '2024-07-01',
                'checkout_date' => '2024-07-10',
                'guest_name' => 'John Doe',
                'guest_email' => 'johndoe@example.com',
                'guest_phone' => '555-1234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 2,
                'checkin_date' => '2024-08-01',
                'checkout_date' => '2024-08-05',
                'guest_name' => 'Jane Smith',
                'guest_email' => 'janesmith@example.com',
                'guest_phone' => '555-5678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 3,
                'checkin_date' => '2024-09-01',
                'checkout_date' => '2024-09-10',
                'guest_name' => 'Alice Johnson',
                'guest_email' => 'alicejohnson@example.com',
                'guest_phone' => '555-9101',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
