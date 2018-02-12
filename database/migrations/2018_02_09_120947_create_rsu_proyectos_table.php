<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsuProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsu_proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aprobacion');
             $table->integer('rsu_nivel_id')->unsigned(); 
            $table->string('titulo');
            $table->string('avance');
            $table->string('objetivos',600);
            $table->string('justificacion',600);
            $table->string('logros',600);
            $table->string('dificultades',600);
            $table->string('lugar');
            $table->string('beneficiarios');
            $table->string('obs',600);
            $table->string('culminacion');

            $table->foreign('rsu_nivel_id')->references('id')->on('rsu_nivels')->onDelete('cascade');
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
        Schema::dropIfExists('rsu_proyectos');
    }
}
