<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => "Cultura"],//1
            ['name' => "Deporte"],//2
            ['name' => "Divulgacion"],//3
            ['name' => "Ciencia"],//4
            ['name' => "Internacional"],//5
            ['name' => "Al aire libre"],//6
            ['name' => "Recreacion"],//7
            ['name' => "Videojuegos"],//8
        ]);
    }
}
