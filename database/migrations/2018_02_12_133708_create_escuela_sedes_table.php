<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelaSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuela_sedes', function (Blueprint $table) {
            $table->integer('sede_id')->unsigned();        

            $table->integer('escuela_id')->unsigned();
            $table->primary(['sede_id','escuela_id']);
            
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');
            $table->foreign('escuela_id')->references('id')->on('escuelas')->onDelete('cascade');
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
        Schema::dropIfExists('escuela_sedes');
    }
}
