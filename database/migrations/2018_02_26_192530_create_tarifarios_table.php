<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('depencencia_id');//centro generador
            $table->string('descripcion');
            $table->float('monto')->nullable();
            $table->integer('es_modalidades')->nullable();
            $table->integer('es_maestria')->nullable();
            $table->integer('es_doctorado')->nullable();
            $table->integer('es_modalidad_publico')->nullable();
            $table->integer('es_modalidad_particular')->nullable();
            $table->integer('es_libre')->nullable();
            $table->integer('grupo_seleccion_eap')->nullable();
            $table->integer('es_diplomado')->nullable();
            $table->integer('es_procapt')->nullable();
            $table->integer('es_promaster')->nullable();
            $table->integer('es_segundaespecia')->nullable();
            $table->integer('es_estudioscomple')->nullable();
            $table->integer('es_estudiosdistancia')->nullable();
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
        Schema::dropIfExists('tarifarios');
    }
}
