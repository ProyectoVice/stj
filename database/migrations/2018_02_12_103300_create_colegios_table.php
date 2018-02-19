<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_modular');
            $table->string('colegio');
            $table->string('direccion');
            $table->integer('colegio_tipo_dependencia_id')->unsigned();
            $table->integer('distrito_id')->unsigned();
            $table->foreign('colegio_tipo_dependencia_id')->references('id')->on('colegio_tipo_dependencias')->onDelete('cascade');
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');
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
        Schema::dropIfExists('colegios');
    }
}
