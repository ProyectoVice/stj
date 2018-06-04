<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ambiente');
            $table->string('descripcion')->nullable();
            $table->integer('capacidad')->nullable();
            $table->string('ubicación')->nullable();
            $table->integer('dependencia_id')->unsigned();
            $table->integer('tipo_ambiente_id')->unsigned();
            $table->integer('pabellon_id')->unsigned();
            $table->integer('es_aula')->nullable();
            $table->integer('es_taller')->nullable();
            $table->integer('es_laboratorio')->nullable();
            $table->integer('es_biblioteca')->nullable();
            $table->integer('es_centro_computo')->nullable();
            $table->integer('es_auditorio')->nullable();

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
        Schema::dropIfExists('ambientes');
    }
}
