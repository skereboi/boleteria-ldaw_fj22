<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("reservations")->insert([
            ["event_id" => 9, "user_id" => 1, "qr_code" => "{\"event_id\": \"any\", \"user_id\": \"any\", \"key\": \"a3ada3ayuda34234\"}"],
            ["event_id" => 7, "user_id" => 1, "qr_code" => "{\"event_id\": \"any\", \"user_id\": \"any\", \"key\": \"a3ada3porfa34234\"}"],
            ["event_id" => 8, "user_id" => 2, "qr_code" => "{\"event_id\": \"any\", \"user_id\": \"any\", \"key\": \"a3ada3mesie34234\"}"],
            ["event_id" => 4, "user_id" => 2, "qr_code" => "{\"event_id\": \"any\", \"user_id\": \"any\", \"key\": \"a3ada3ntomu34234\"}"],
            ["event_id" => 2, "user_id" => 3, "qr_code" => "{\"event_id\": \"any\", \"user_id\": \"any\", \"key\": \"a3ada3ytris34234\"}"],
            ["event_id" => 3, "user_id" => 4, "qr_code" => "{\"event_id\": \"any\", \"user_id\": \"any\", \"key\": \"a3ada3teyno34234\"}"],
            ["event_id" => 6, "user_id" => 5, "qr_code" => "{\"event_id\": \"any\", \"user_id\": \"any\", \"key\": \"a3ada3seque34234\"}"],
            ["event_id" => 1, "user_id" => 6, "qr_code" => "{\"event_id\": \"any\", \"user_id\": \"any\", \"key\": \"a3ada3hacer34234\"}"]
        ]);
    }
}
