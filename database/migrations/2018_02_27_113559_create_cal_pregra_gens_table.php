<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalPregraGensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cal_pregra_gens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('descripcion',600);
            $table->string('color')->nullable();
            $table->string('textColor')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('responsable');
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
        Schema::dropIfExists('cal_pregra_gens');
    }
}
