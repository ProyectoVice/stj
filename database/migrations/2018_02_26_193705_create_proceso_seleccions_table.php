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
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->integer('estado')->default(1);
            $table->integer('etapa')->nullable();//1=I 2=II
            $table->integer('ciclo')->nullable();//1 =A 2=B 3=C
            $table->integer('programa_id');
            $table->integer('postulacion_modalidad_id')->nullable();
            $table->integer('sede_desentralizada_pre')->nullable();
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
