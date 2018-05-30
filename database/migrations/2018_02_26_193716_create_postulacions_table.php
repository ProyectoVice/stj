<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacions', function (Blueprint $table) {
            $table->increments('id');
            $table->float('nota')->unsigned()->nullable();
            $table->integer('users_id')->unsigned();
            $table->integer('proceso_seleccion_id')->unsigned();
            $table->integer('sede_id')->unsigned()->nullable();
            $table->integer('escuela_id')->unsigned()->nullable();
            $table->integer('postulacion_preparacion_id')->nullable();
            $table->integer('postulacion_tipo')->nullable();//1 regular 2 libre
            $table->integer('postulacion_situacion_id')->nullable();
            $table->integer('maestria_id')->nullable();
            $table->integer('doctorado_id')->nullable();
            $table->integer('segunda_especialidad_id')->nullable();
            $table->integer('estudios_complementario_id')->nullable();
            $table->integer('grado_bachiller_id')->nullable();
            $table->integer('grado_magister_id')->nullable();
            $table->integer('grado_doctor_id')->nullable();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('proceso_seleccion_id')->references('id')->on('proceso_seleccions')->onDelete('cascade');
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
        Schema::dropIfExists('postulacions');
    }
}
