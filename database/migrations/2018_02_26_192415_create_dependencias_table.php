<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dependencia');
            $table->integer('usuario_id_representante')->nullable();
            $table->integer('anexo')->nullable();
            $table->string('cargo')->nullable();
            $table->integer('organiza_diplomado')->nullable();
            $table->integer('es_facultad')->nullable();
            $table->integer('es_escuela')->nullable();
            $table->integer('es_posgrado')->nullable();
            $table->integer('es_direccion')->nullable();
            $table->integer('es_oficina')->nullable();
            $table->integer('es_dep_ac')->nullable();
            $table->integer('dependencia_id')->nullable();
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
        Schema::dropIfExists('dependencias');
    }
}
