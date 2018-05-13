<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('f_nac')->nullable();
            $table->string('email',30)->unique();
            $table->string('dni',8)->unique();
            $table->string('password');
            $table->string('foto')->default('user.png');
            //Domicilio
            $table->integer('distrito_nac')->default('887')->unsigned();
            $table->string('domicilio')->nullable();
            $table->string('n_domicilio')->nullable();
            //Contacto
            $table->string('tel')->nullable();
            $table->string('cel')->nullable();
            //Otros
            $table->string('tipo_sangre')->nullable();
            $table->integer('genero')->default('1');
            $table->integer('dependencia_id_depende')->nullable();
            $table->integer('colegio_id_iv')->nullable();
            $table->integer('colegio_id_v')->nullable();
            $table->string('estado_login')->default('0');
            $table->integer('est_civil_id')->default('7')->unsigned();
            $table->integer('religion_id')->default('1')->unsigned();
            
            $table->foreign('distrito_nac')->references('id')->on('distritos')->onDelete('cascade');
            $table->foreign('est_civil_id')->references('id')->on('est_civils')->onDelete('cascade');
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
