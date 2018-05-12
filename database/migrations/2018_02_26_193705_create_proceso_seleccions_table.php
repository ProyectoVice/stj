<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesoSeleccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_seleccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('anio');
            $table->integer('etapa')->nullable();
            $table->integer('postulacion_ciclo_id')->nullable();
            $table->integer('programa_id');
            $table->integer('postulacion_modalidad_id');
            $table->integer('descuento')->nullable();
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
        Schema::dropIfExists('proceso_seleccions');
    }
}
