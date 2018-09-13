<?php

use Illuminate\Database\Seeder;

class DependenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dependencias
        DB::table('dependencias')->insert([

                //Facultades
         ['dependencia' => 'Vicerrectorado Academico', 'organiza_diplomado'=>null, 'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null,  'dependencia_id'=> null, 'es_dep_ac'=>null, 'es_centro_generador'=>null, 'es_directivo'=>'1',],
//Facultades
         ['dependencia' => 'CIENCIAS AGRARIAS', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null, 'es_centro_generador'=>1,'es_directivo'=>null,], //ID=2
         ['dependencia' => 'MEDICINA', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'PSICOLOGÍA', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'ENFERMERÍA', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'OBSTETRICIA', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'CIENCIAS ADMINISTRATIVAS Y TURISMO', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'CIENCIAS CONTABLES Y FINANCIERAS', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'ECONOMÍA', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'CIENCIAS SOCIALES', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'CIENCIAS DE LA EDUCACIÓN', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'DERECHO Y CIENCIAS POLÍTICAS', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'INGENIERÍA CIVIL Y ARQUITECTURA', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'INGENIERÍA INDUSTRIAL Y DE SISTEMAS', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
         ['dependencia' => 'MEDICINA VETERINARIA Y ZOOTECNIA', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,], //ID=14
//Escuelas
      ['dependencia' => 'INGENIERÍA AGRONÓMICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'INGENIERÍA AGROINDUSTRIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'INGENIERÍA AGROPECUARIA FORESTAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'MEDICINA HUMANA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 3, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'ODONTOLOGÍA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 3, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'PSICOLOGÍA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 4, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'ENFERMERÍA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 5, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'OBSTETRICIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1','es_posgrado'=>null,'es_direccion'=>null,'es_oficina'=>null,'dependencia_id'=> 6,'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'CIENCIAS ADMINISTRATIVAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 7, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'TURISMO Y HOTELERIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 7, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'CIENCIAS CONTABLES Y FINANCIERAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 8, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'ECONOMÍA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 9, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'SOCIOLOGÍA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 10, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'CIENCIAS DE LA COMUNICACION SOCIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 10, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'EDUCACIÓN INICIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'EDUCACIÓN PRIMARIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'EDUCACIÓN FÍSICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'FILOSOFÍA, PSICOLOGÍA Y CIENCIAS SOCIALES', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'LENGUA Y LITERATURA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'CIENCIAS HISTÓRICO SOCIALES Y GEOGRÁFICAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'MATEMÁTICA Y FÍSICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'BIOLOGÍA, QUÍMICA Y CIENCIA DEL AMBIENTE', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'DERECHO Y CIENCIAS POLÍTICAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 12, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'INGENIERÍA CIVIL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 13, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'ARQUITECTURA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '13', 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'INGENIERÍA INDUSTRIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 14, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'INGENIERÍA DE SISTEMAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 14, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'MEDICINA VETERINARIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 15, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
//departamentos academicos
      ['dependencia' => 'INGENIERÍA AGRONÓMICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'INGENIERÍA AGROINDUSTRIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'MEDICINA Y ODONTOLOGÍA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 3, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'PSICOLOGÍA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 4, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'ENFERMERÍA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 5, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'OBSTETRICIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1,'es_posgrado'=>null,'es_direccion'=>null,'es_oficina'=>null,'dependencia_id'=> 6,'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'CIENCIAS ADMINISTRATIVA Y TURISMO Y HOTELERIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 7, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'CIENCIAS CONTABLES Y FINANCIERAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 8, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'ECONOMÍA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 9, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'SOCIOLOGÍA Y CIENCIAS DE LA COMUNICACION', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 10, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'PEDAGÓGICO DE CIENCIAS FORMALES NATURALES', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'PEDAGÓGICO DE CIENCIAS SOCIALES Y HUMANIDADES', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'DERECHO Y CIENCIAS POLÍTICAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 12, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'INGENIERÍA CIVIL Y ARQUITECTURA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 13, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'INGENIERÍA INDUSTRIAL Y DE SISTEMAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 14, 'es_dep_ac'=>1,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'MEDICINA VETERINARIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>1, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 15, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
//Organos dependientes del VRA
      ['dependencia' => 'Dirección de Asuntos y Servicios Académicos', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],//60
      ['dependencia' => 'CEPREVAL', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'DIRECCIÓN DE EDUCACIÓN A DISTANCIA Y FORMACIÓN CONTINUA', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'Dirección de Bienestar Universitario', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'Dirección de Admisión', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'Dirección de Responsabilidad Social Universitaria', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'Dirección de Estudios Generales', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'Oficina de Biblioteca Central ', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
// Unidades
      ['dependencia' => 'Unidad de procesos académicos', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=>60, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'Unidad de Registro Central y Archivo Académico', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=>60, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'Unidad de Gestión Docente', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=>60, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'Unidad de Gestión Curricular', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=>60, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'Programa de Capacitación y Titulación Profesional', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=>60, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],

// Postgrado
      ['dependencia' => 'Escuela de Posgrado', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>1, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> null, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'PROCAPT', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null,'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      ['dependencia' => 'PROMASTER', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=> 44, 'es_dep_ac'=>null,'es_centro_generador'=>1,'es_directivo'=>null,],
      
   ]);
    }
}
