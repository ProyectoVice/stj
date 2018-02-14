<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsuLineamientoProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsu_lineamiento_proyectos', function (Blueprint $table) {
             $table->integer('rsu_lin_id')->unsigned();
             $table->integer('rsu_proy_id')->unsigned();
             $table->primary(['rsu_lin_id','rsu_proy_id']);

             $table->foreign('rsu_lin_id')->references('id')->on('rsu_lineamientos')->onDelete('cascade');
             $table->foreign('rsu_proy_id')->references('id')->on('rsu_proyectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rsu_lineamiento_proyectos');
    }
}
