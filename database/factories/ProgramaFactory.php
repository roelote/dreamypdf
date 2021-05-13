<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Programa;
use Faker\Generator as Faker;

$factory->define(Programa::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->name,
        'imagen_url'=>'img/default-home.jpg',
        'itinerario'=>$faker->text($maxNbChars = 200),
        'imagesitinerario'=>'["hotel2.jpg","HOTEL.jpg","foto de prueba.jpg","tarija-bolivia - copia.jpg"]',
        'incluye'=>$faker->text($maxNbChars = 200),
        'imagesincluye'=>'["hotel2.jpg","HOTEL.jpg"]',
        'imagesdbuffete'=>'["hotel2.jpg,"HOTEL.jpg"]',
        'imagesabuffete'=>'["hotel2.jpg,"HOTEL.jpg"]',
        'imagesh'=>'["hotel2.jpg,"HOTEL.jpg"]',
        'imagesh2'=>'["hotel2.jpg,"HOTEL.jpg"]',
        'imagesh3'=>'["hotel2.jpg,"HOTEL.jpg"]',
        'precio'=>$faker->text($maxNbChars = 50)
    ];
});
