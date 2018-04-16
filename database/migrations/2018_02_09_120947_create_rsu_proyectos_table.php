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
            $table->string('titulo');
            $table->string('doc_aprobacion')->nullable();//Nombre
            $table->string('file_aprobacion')->nullable();//archivo
            $table->integer('rsu_nivel_id')->unsigned()->default('2');  
            $table->string('lugar')->nullable();
            $table->string('beneficiarios')->nullable();
            $table->string('aliados')->nullable();
            $table->string('porcentaje')->nullable();       
            $table->string('avance')->nullable();
            $table->string('objetivos',600)->nullable();
            $table->string('justificacion',600)->nullable();
            $table->string('logros',600)->nullable();
            $table->string('dificultades',600)->nullable();
            $table->string('obs',600)->nullable();
            $table->string('doc_culminacion')->nullable();//Nombre
            $table->string('file_culminacion')->nullable();//archivo
            $table->string('satisfaccion')->nullable();//texto
            $table->string('file_satisfaccion')->nullable();//archivo

            $table->string('etapa',1)->default('1');
            //1 => color: rojo, etapa: presentación
            //2 => color: verde, etapa: aprobación
            //3 => color: naranja, etapa: pendiente, con observaciones
            //4 => color: sin color, etapa: culminado, con observaciones

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
