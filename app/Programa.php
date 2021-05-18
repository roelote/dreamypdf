<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = ['titulo','imagen_url','itinerario','incluye','precio','imagesitinerario','imagesincluye','imagesdbuffete','imagesabuffete','hotelp'];
}

