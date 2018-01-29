<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:database/migrations/2014_10_12_000000_create_users_table.php
            $table->string('nombres');
            $table->string('paterno');
            $table->string('materno');
            
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
=======
            $table->string('departamento');
>>>>>>> 375ec17c0687e97180b15c70edd3a05a91408dd7:database/migrations/2018_01_26_083402_create_departamentos_table.php
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
        Schema::dropIfExists('departamentos');
    }
}
