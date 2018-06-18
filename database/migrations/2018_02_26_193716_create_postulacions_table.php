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
            $table->integer('preparacion')->nullable();//1 CEPREVAL 2 Academia 3 Tutor particular 4 Autoestudio
            $table->integer('postulacion_tipo')->nullable();//1 regular 2 libre
            $table->integer('situacion')->nullable();//1 Alcanzó vacante 2 No alcanzó vacante 3 Libre
            $table->integer('programa_estudio_posgrado_id')->nullable();
            $table->integer('grado_estudio_id')->nullable();

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
