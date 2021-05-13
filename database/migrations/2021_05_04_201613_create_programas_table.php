<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('imagen_url')->nullable();
            $table->text('itinerario');
            $table->text('imagesitinerario');
            $table->text('incluye');
            $table->text('imagesincluye');
            $table->text('imagesdbuffete')->nullable();
            $table->text('imagesabuffete')->nullable();
            $table->text('imagesh')->nullable();
            $table->text('imagesh2')->nullable();
            $table->text('imagesh3')->nullable();
            $table->text('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas');
    }
}
