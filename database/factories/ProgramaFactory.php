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
        'imagesdbuffete'=>'["d-buffete-1.png","d-buffete-2.png","d-buffete-3.png"]',
        'imagesabuffete'=>'["a-buffete-1.png","a-buffete-2.png","a-buffete-3.png"]',
        'imagesh'=>'["hotel-1.png","hotel-2.png","hotel-3.png","hotel-4.png","hotel-5.png","hotel-6.png"]',
        'imagesh2'=>'["hotel2-1.png","hotel2-2.png","hotel2-3.png","hotel2-4.png","hotel2-5.png","hotel2-6.png"]',
        'imagesh3'=>'["hotel3-1.png","hotel3-2.png","hotel3-3.png","hotel3-4.png","hotel3-5.png","hotel3-6.png"]',
        'precio'=>$faker->text($maxNbChars = 50)
    ];
});
