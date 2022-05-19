<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([

            ["name" => "Jesus MJ",
            "tel_number" => "0000000000",
            "email" => "jesus@boleteria.mx",
            "password" => "admin1234",
            "type_user" => "1"],
            
            ["name" => "Miku Hatsune",
            "tel_number" => "1111111111",
            "email" => "miku@boleteria.mx",
            "password" => "admin1234",
            "type_user" => "1"],
            
            ["name" => "Pedro Picapiedra",
            "tel_number" => "222222222",
            "email" => "pedro@correo.com.mx",
            "password" => "user1234",
            "type_user" => "2"],

            ["name" => "Susana Oria",
            "tel_number" => "3333333333",
            "email" => "susanaO@correo.com.mx",
            "password" => "user1234",
            "type_user" => "2"],

            ["name" => "Que es Uxiono",
            "tel_number" => "4444444444",
            "email" => "estaxd@correo.com.mx",
            "password" => "user1234",
            "type_user" => "2"],

            ["name" => "Ayuda Pls",
            "tel_number" => "999999999",
            "email" => "ayuda@correo.com.mx",
            "password" => "user1234",
            "type_user" => "2"],
        ]);
    }
}
