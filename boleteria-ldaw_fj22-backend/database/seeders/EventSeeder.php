<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("events")->insert([

            ["name" => "Torneo de Minecraft",
            "tel_number" => "1234567890",
            "start_date" => "2022-05-04 20:00:00",
            "end_date" => "2022-05-06 21:30:00",
            "description" => "Este sera un torneo en el que podras jugar Minecraft PVP contra tus amigos",
            "fee" => "100.00",
            "place" => "Tec Campus Qro"],

            ["name" => "Feria del libro",
            "tel_number" => "2222222222",
            "start_date" => "2022-05-06 20:00:00",
            "end_date" => "2022-05-03 21:30:00",
            "description" => "Compra, vende e intercambia tus libros, dale una nueva vida a ese libro que tienes escondido",
            "fee" => "0.00",
            "place" => "Centro de Queretaro"],

            ["name" => "Saraperos vs Pericos",
            "tel_number" => "333333333",
            "start_date" => "2022-05-04 12:00:00",
            "end_date" => "2022-05-04 21:30:00",
            "description" => "Ven y disfruta del impresionante juego de Beisbol",
            "fee" => "700.00",
            "place" => "Estadio Cuahutemoc"],

            ["name" => "Concierto de EDM",
            "tel_number" => "4444444444",
            "start_date" => "2022-05-04 23:00:00",
            "end_date" => "2022-05-05 06:30:00",
            "description" => "Ven a disfrutar una buena noche de bebidas y diversion con tus amigos",
            "fee" => "200.00",
            "place" => "El Olvido - Skybar"],

            ["name" => "Conferencia: Aprende a escoger la carrera correcta",
            "tel_number" => "1234567890",
            "start_date" => "2022-05-10 17:00:00",
            "end_date" => "2022-05-10 21:30:00",
            "description" => "Asiste, seguro la vas a necesitar",
            "fee" => "0.00",
            "place" => "Tec Campus Qro"],

            ["name" => "Conferencia: ¿Que hacer si no escogiste la carrea correcta?",
            "tel_number" => "1234567890",
            "start_date" => "2022-05-11 17:00:00",
            "end_date" => "2022-05-11 21:30:00",
            "description" => "Puede que aun no sea muy tarde",
            "fee" => "0.00",
            "place" => "Tec Campus Qro"],

            ["name" => "Conferencia: Aceptar tu carrera",
            "tel_number" => "1234567890",
            "start_date" => "2022-05-11 17:00:00",
            "end_date" => "2022-05-11 21:30:00",
            "description" => "Jajaja ya vas muy adelante, ni modo",
            "fee" => "0.00",
            "place" => "Tec Campus Qro"],

            ["name" => "Feria de la comida",
            "tel_number" => "1234567890",
            "start_date" => "2022-05-11 17:00:00",
            "end_date" => "2022-05-11 21:30:00",
            "description" => "Conoce y disfruta de una experiencia culinaria internacional",
            "fee" => "0.00",
            "place" => "Centro de convenciones"],

            ["name" => "Taller: Como no suicidarse",
            "tel_number" => "1234567890",
            "start_date" => "2022-05-10 20:00:00",
            "end_date" => "2022-05-12 21:30:00",
            "description" => "Reflexiona, valora, y mejora con este taller",
            "fee" => "100.00",
            "place" => "Tu imaginacion"],
            
        ]);
    }
}
