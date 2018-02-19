<?php

use Illuminate\Database\Seeder;

class DatosForColegioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tipo de colegio
        DB::table('colegio_tipos')->insert([
                ['colegio_tipo' => 'Privada',],
                ['colegio_tipo' => 'Publica',],
                ['colegio_tipo' => 'Publica de gestion privada',]                
            ]);
        // Tipo de depencias de colegio
        DB::table('colegio_tipo_dependencias')->insert([
                ['colegio_tipo_dependencia' => 'Asociacion civil/Ins. benefica', 'colegio_tipo_id' => '1'],
                ['colegio_tipo_dependencia' => 'comunidad', 'colegio_tipo_id' => '1'],
                ['colegio_tipo_dependencia' => 'comunidad o asociacion religiosa', 'colegio_tipo_id' => '1'],
                ['colegio_tipo_dependencia' => 'Cooperativo', 'colegio_tipo_id' => '1'],
                ['colegio_tipo_dependencia' => 'Empresa (fiscalizado)', 'colegio_tipo_id' => '1'],
                ['colegio_tipo_dependencia' => 'Particular', 'colegio_tipo_id' => '1'],
                ['colegio_tipo_dependencia' => 'Municipalidad', 'colegio_tipo_id' => '2'],
                ['colegio_tipo_dependencia' => 'Otro sector público (FF.AA.)', 'colegio_tipo_id' => '2'],
                ['colegio_tipo_dependencia' => 'Sector Educacion', 'colegio_tipo_id' => '2'],
                ['colegio_tipo_dependencia' => 'Convenio con sector educacion', 'colegio_tipo_id' => '3']             
                           
            ]);
         // Colegio
        DB::table('colegios')->insert([
                ['codigo_modular' => '0597443', 'colegio' => 'HELLEN KELLER', 'direccion' => 'JIRON GUZMAN BARRON 471', 'colegio_tipo_dependencia_id' => '9', 'distrito_id' => '88'],
                ['codigo_modular' => '0411736', 'colegio' => '86001 SANTA ROSA DE VITERBO', 'direccion' => 'JIRON RAMON CASTILLA 1219', 'colegio_tipo_dependencia_id' => '10', 'distrito_id' => '84'],
                ['codigo_modular' => '735688', 'colegio' => 'CENTRO DE EDUCACION ESPECIAL', 'direccion' => 'AVENIDA SANCHEZ DULANTO 700', 'colegio_tipo_dependencia_id' => '9', 'distrito_id' => '109']                  
                           
            ]);
    }
}
