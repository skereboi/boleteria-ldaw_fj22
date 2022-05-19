<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("category_event")->insert([
            ["category_id" => 7, "event_id" => 1],
            ["category_id" => 8, "event_id" => 1],
            ["category_id" => 1, "event_id" => 2],
            ["category_id" => 6, "event_id" => 2],
            ["category_id" => 2, "event_id" => 3],
            ["category_id" => 6, "event_id" => 3],
            ["category_id" => 7, "event_id" => 4],
            ["category_id" => 6, "event_id" => 4],
            ["category_id" => 1, "event_id" => 5],
            ["category_id" => 3, "event_id" => 5],
            ["category_id" => 1, "event_id" => 6],
            ["category_id" => 3, "event_id" => 6],
            ["category_id" => 1, "event_id" => 7],
            ["category_id" => 3, "event_id" => 7],
            ["category_id" => 5, "event_id" => 8],
            ["category_id" => 6, "event_id" => 8],
            ["category_id" => 1, "event_id" => 9],
            ["category_id" => 4 , "event_id" => 9],            
        ]);
    }
}
