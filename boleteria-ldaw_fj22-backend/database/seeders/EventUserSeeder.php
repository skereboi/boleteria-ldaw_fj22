<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("event_user")->insert([
            ["event_id" => 1, "user_id" => 1],
            ["event_id" => 5, "user_id" => 1],
            ["event_id" => 6, "user_id" => 1],
            ["event_id" => 7, "user_id" => 1],
            ["event_id" => 9, "user_id" => 1],
            ["event_id" => 2, "user_id" => 2],
            ["event_id" => 3, "user_id" => 2],
            ["event_id" => 4, "user_id" => 2],  
            ["event_id" => 8, "user_id" => 2],          
        ]);

    }
}
