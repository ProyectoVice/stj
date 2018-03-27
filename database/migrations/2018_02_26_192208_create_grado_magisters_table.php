<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradoMagistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_magisters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grado_magister');
            $table->integer('universidad_id')->unsigned();
            $table->foreign('universidad_id')->references('id')->on('universidads')->onDelete('cascade');
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
        Schema::dropIfExists('grado_magisters');
    }
}
