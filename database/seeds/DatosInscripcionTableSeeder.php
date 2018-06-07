<?php

use Illuminate\Database\Seeder;

class DatosInscripcionTableSeeder extends Seeder
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
            ['dependencia' => 'Vicerrectorado Academico', 'organiza_diplomado'=>null, 'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null,  'dependencia_id'=> null, 'es_dep_ac'=>null, 'es_centro_generador'=>null, 'departamento_dependencia_id'=>null,],
//Facultades
            ['dependencia' => 'Facultad de Ciencias Agrarias', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null, 'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Medicina', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Psicología', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Enfermería', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Obstetricia', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Ciencias Administrativas y Turismo', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Ciencias Contables y Financieras', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Economía', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Ciencias Sociales', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Ciencias de la Educación', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Derecho y Ciencias Políticas', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Ingeniería Civil y Arquitectura', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Ingeniería Industrial y de Sistemas', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Facultad de Medicina Veterinaria y Zootecnia', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
//Escuelas
            ['dependencia' => 'Escuela Profesional INGENIERIA AGRONOMICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>44,],
            ['dependencia' => 'Escuela Profesional INGENIERIA AGROINDUSTRIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>45,],
            ['dependencia' => 'Escuela Profesional INGENIERIA AGROPECUARIA FORESTAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Escuela Profesional MEDICINA HUMANA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 3, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>46,],
            ['dependencia' => 'Escuela Profesional ODONTOLOGIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 3, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>46,],
            ['dependencia' => 'Escuela Profesional PSICOLOGIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 4, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>47,],
            ['dependencia' => 'Escuela Profesional ENFERMERIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 5, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>48,],
            ['dependencia' => 'Escuela Profesional OBSTETRICIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1','es_posgrado'=>null,'es_direccion'=>null,'es_oficina'=>null,'dependencia_id'=> 6,'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>49,],
            ['dependencia' => 'Escuela Profesional CIENCIAS ADMINISTRATIVAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 7, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>50,],
            ['dependencia' => 'Escuela Profesional TURISMO Y HOTELERIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 7, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>50,],
            ['dependencia' => 'Escuela Profesional CIENCIAS CONTABLES Y FINANCIERAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 8, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>51,],
            ['dependencia' => 'Escuela Profesional ECONOMIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 9, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>52,],
            ['dependencia' => 'Escuela Profesional SOCIOLOGIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 10, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>53,],
            ['dependencia' => 'Escuela Profesional CIENCIAS DE LA COMUNICACION SOCIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 10, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>53,],
            ['dependencia' => 'Escuela Profesional EDUCACION INICIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>55,],
            ['dependencia' => 'Escuela Profesional EDUCACION PRIMARIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>55,],
            ['dependencia' => 'Escuela Profesional EDUCACION FISICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>54,],
            ['dependencia' => 'Escuela Profesional FILOSOFIA, PSICOLOGIA Y CIENCIAS SOCIALES', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>55,],
            ['dependencia' => 'Escuela Profesional LENGUA Y LITERATURA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>55,],
            ['dependencia' => 'Escuela Profesional CIENCIAS HISTORICO SOCIALES Y GEOGRAFICAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>55,],
            ['dependencia' => 'Escuela Profesional MATEMATICA Y FISICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>54,],
            ['dependencia' => 'Escuela Profesional BIOLOGIA, QUIMICA Y CIENCIA DEL AMBIENTE', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>54,],
            ['dependencia' => 'Escuela Profesional DERECHO Y CIENCIAS POLITICAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 12, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>56,],
            ['dependencia' => 'Escuela Profesional INGENIERIA CIVIL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 13, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>57,],
            ['dependencia' => 'Escuela Profesional ARQUITECTURA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '13', 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>57,],
            ['dependencia' => 'Escuela Profesional INGENIERIA INDUSTRIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 14, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>58,],
            ['dependencia' => 'Escuela Profesional INGENIERIA DE SISTEMAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 14, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>58,],
            ['dependencia' => 'Escuela Profesional MEDICINA VETERINARIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 15, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>59,],
//departamentos academicos
            ['dependencia' => 'Departamento Académico de Ingeniería Agronómica', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Ingeniería Agroindustrial', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=>2, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Medicina y Odontología', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=>3, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Psicología', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 4, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Enfermería', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 5, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Obstetricia', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 6, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Ciencias Admisnistrativas y Turismo y Hotelería', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 7, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Ciencas Contables y Financieras', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 8, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Economía', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 9, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Sociología y Ciencias de la Comunicación', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 10, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico Pedagógico de Ciencias Formales y Naturales', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico Pedagógico de Ciencias Sociales y Humanidades', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Derecho y Ciencias Políticas', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 12, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Ingeniería Civil y Arquitectura', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 13, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Ingeniería Industrial y de Sistemas', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 14, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Departamento Académico de Medicina Veterinaría', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 15, 'es_dep_ac'=>1,'es_centro_generador'=>null,'departamento_dependencia_id'=>null,],
//otros
            ['dependencia' => 'Dirección de Admisión', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],//60
            ['dependencia' => 'CEPREVAL', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],//61
            ['dependencia' => 'Escuela de Posgrado', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>1, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> null, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'PROCAPT', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null,'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'PROMASTER', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=> 44, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],
            ['dependencia' => 'Jefatura de Centro de idiomas', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,],//65
            ['dependencia' => 'DIRECCIÓN DE EDUCACIÓN A DISTANCIA Y FORMACIÓN CONTINUA', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,'departamento_dependencia_id'=>null,]//65
            ]);
        //tarifarios
        DB::table('tarifarios')->insert([
            ['depencencia_id' =>60, 'descripcion' => 'Carrera Profesional de Medicina Humana, Ciencias Administrativas, Ingenieria Civil, Ciencias Contables -Nacional', 'monto'=>'350', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null, 'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Carrera Profesional de Medicina Humana, Ciencias Administrativas, Ingenieria Civil, Ciencias Contables -Particular', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Otras Carreras Profesionales - Nacional', 'monto'=>'280', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Otras Carreras Profesionales - Particular', 'monto'=>'330', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Postulantes libres', 'monto'=>'100', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Primeros puestos de Educación Secundaria y Educación Básica Alternativa-Nacional', 'monto'=>'300', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Primeros puestos de Educación Secundaria y Educación Básica Alternativa-Particular', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Traslado externo Nacional e Internacional - Univ. Publica', 'monto'=>'500', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Traslado externo Nacional e Internacional - Univ. Privada', 'monto'=>'800', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Traslado externo Nacional e Internacional - Univ. Extranjeras', 'monto'=>'1000', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Deportista Calificado de Alto Nivel, Nacional, Macroregional y Regional-Nacional', 'monto'=>'300', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Deportista Calificado de Alto Nivel, Nacional, Macroregional y Regional-Particular', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Graduados y/o Titulados', 'monto'=>'850', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Traslados Internos', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Victimas de terrorismo', 'monto'=>'0', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],//puede haber un tarifario sin monto
            ['depencencia_id' =>60, 'descripcion' => 'Personas con Discapacidad', 'monto'=>'200', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Hijos de campesinos y/o nativos', 'monto'=>'150', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Licenciado de las fuerzas Armadas', 'monto'=>'200', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Egresados del COAR', 'monto'=>'300', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Egresados del Colegio Nacional de Aplicación de la UNHEVAL y de la I.E.A. Marino Meza Rosales', 'monto'=>'300', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Carrera Profesional de Medicina Humana -Nacional', 'monto'=>'600', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Carrera Profesional de Medicina Humana -Particular', 'monto'=>'650', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Carrera Profesional de Medicina Humana -Libre', 'monto'=>'500', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Otras Carrera Profesional -Nacional', 'monto'=>'500', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1', 'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL  Otras Carrera Profesional -Particular', 'monto'=>'550', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL  Otras Carrera Profesional -Libre', 'monto'=>'400', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Carreras Profesionales de Medicina Humana-Nacional', 'monto'=>'350', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Carreras Profesionales de Medicina Humana-Particular', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Carreras Profesionales de Medicina Humana-Libre', 'monto'=>'250', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Otras Carreras Profesionales-Nacional', 'monto'=>'280', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Otras Carreras Profesionales-Particular', 'monto'=>'330', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Otras Carreras Profesionales-Libre', 'monto'=>'250', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>62, 'descripcion' => 'Maestria derecho de postulacion', 'monto'=>'250', 'es_modalidades'=>'0', 'es_maestria'=>'1','es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>62, 'descripcion' => 'Doctorado derecho de postulacion', 'monto'=>'380', 'es_modalidades'=>'0','es_maestria'=>null, 'es_doctorado'=>'1','es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Gestion por Procesos-matricula', 'monto'=>'150', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Gestion por Procesos-modulo', 'monto'=>'250', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Gestion por Procesos-diploma', 'monto'=>'20', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Gestion por Procesos-todos módulos', 'monto'=>'650', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Tics-matricula', 'monto'=>'100', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Tics-modulo', 'monto'=>'300', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Tics-diploma', 'monto'=>'30', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>63, 'descripcion' => 'PROCAPT-matricula', 'monto'=>'500', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null, 'es_procapt'=>'1',],
            ['depencencia_id' =>63, 'descripcion' => 'PROCAPT-modulo', 'monto'=>'700', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null, 'es_procapt'=>'1',],
            ['depencencia_id' =>64, 'descripcion' => 'PROMASTER-matricula', 'monto'=>'500', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>64, 'descripcion' => 'PROMASTER-modulo', 'monto'=>'900', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            //tarifario de ingles
            //id 46
            ['depencencia_id' =>65, 'descripcion' => 'Ingles-matricula', 'monto'=>'25', 'es_modalidades'=>null,'es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>65, 'descripcion' => 'Ingles basico-pensión', 'monto'=>'70', 'es_modalidades'=>null,'es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>65, 'descripcion' => 'Ingles intermedio-pensión', 'monto'=>'80', 'es_modalidades'=>null,'es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>65, 'descripcion' => 'Ingles avanzado-pensión', 'monto'=>'80', 'es_modalidades'=>null,'es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>66, 'descripcion' => 'Estudios informaticcos-matricula', 'monto'=>'30', 'es_modalidades'=>null,'es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>66, 'descripcion' => 'Estudios informaticos-pensión básico e intermedio-normal', 'monto'=>'90', 'es_modalidades'=>null,'es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>66, 'descripcion' => 'Estudios informaticos-pensión básico e intermedio-intensivo', 'monto'=>'180', 'es_modalidades'=>null,'es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>66, 'descripcion' => 'Estudios informaticos-pensión avanzado-normal', 'monto'=>'100', 'es_modalidades'=>null,'es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>66, 'descripcion' => 'Estudios informaticos-pensión avanzado-intensivo', 'monto'=>'200', 'es_modalidades'=>null,'es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,]
            ]);
        //pagos
        DB::table('pagos')->insert([
            ['num_comprobante' => '1234567', 'fecha_comprobante' => '2018-06-03','user_id'=> 10,'tarifario_id'=> 1, 'importe'=> '350', 'estado_recibo'=> 0,],
            ['num_comprobante' => '1234566', 'fecha_comprobante' => '2018-06-03','user_id'=> 11,'tarifario_id'=> 21, 'importe'=> '600', 'estado_recibo'=> 0,],

            ['num_comprobante' => '1111111', 'fecha_comprobante' => '2018-06-03','user_id'=> 12,'tarifario_id'=> 35, 'importe'=> '150', 'estado_recibo'=> 1,],
            ['num_comprobante' => '2222222', 'fecha_comprobante' => '2018-06-03','user_id'=> 12,'tarifario_id'=> 36, 'importe'=> '250', 'estado_recibo'=> 1,],
            ['num_comprobante' => '3333333', 'fecha_comprobante' => '2018-06-03','user_id'=> 12,'tarifario_id'=> 37, 'importe'=> '20', 'estado_recibo'=> 1,],

            ['num_comprobante' => '4444444', 'fecha_comprobante' => '2018-06-03','user_id'=> 13,'tarifario_id'=> 42, 'importe'=> '500', 'estado_recibo'=> 1,],
            ['num_comprobante' => '5555555', 'fecha_comprobante' => '2018-06-03','user_id'=> 13,'tarifario_id'=> 43, 'importe'=> '700', 'estado_recibo'=> 1,],

            ['num_comprobante' => '1111222', 'fecha_comprobante' => '2018-06-03','user_id'=> 14,'tarifario_id'=> 35, 'importe'=> '150', 'estado_recibo'=> 0,],

            ['num_comprobante' => '1111333', 'fecha_comprobante' => '2018-06-03','user_id'=> 15,'tarifario_id'=> 35, 'importe'=> '150', 'estado_recibo'=> 0,],

            ['num_comprobante' => '1111444', 'fecha_comprobante' => '2018-06-03','user_id'=> 16,'tarifario_id'=> 39, 'importe'=> '100', 'estado_recibo'=> 1,],//10
            ['num_comprobante' => '2222555', 'fecha_comprobante' => '2018-06-03','user_id'=> 16,'tarifario_id'=> 40, 'importe'=> 250, 'estado_recibo'=> 1,],//11

            ['num_comprobante' => '3333555', 'fecha_comprobante' => '2018-06-03','user_id'=> 17,'tarifario_id'=> 35, 'importe'=> 150, 'estado_recibo'=> 1,],
            ['num_comprobante' => '1111555', 'fecha_comprobante' => '2018-06-03','user_id'=> 17,'tarifario_id'=> 36, 'importe'=> '200', 'estado_recibo'=> 1,],
            ['num_comprobante' => '2222666', 'fecha_comprobante' => '2018-06-03','user_id'=> 17,'tarifario_id'=> 36, 'importe'=> '200', 'estado_recibo'=> 1,],

            ['num_comprobante' => '3333666', 'fecha_comprobante' => '2018-06-03','user_id'=> 18,'tarifario_id'=> 39, 'importe'=> 100, 'estado_recibo'=> 1,],
            ['num_comprobante' => '1111666', 'fecha_comprobante' => '2018-06-03','user_id'=> 18,'tarifario_id'=> 40, 'importe'=> 300, 'estado_recibo'=> 1,],
            ['num_comprobante' => '1111777', 'fecha_comprobante' => '2018-06-03','user_id'=> 18,'tarifario_id'=> 40, 'importe'=> 300, 'estado_recibo'=> 1,],

            ['num_comprobante' => '2222777', 'fecha_comprobante' => '2018-06-03','user_id'=> 18,'tarifario_id'=> 35, 'importe'=> 150, 'estado_recibo'=> 1,],
            ['num_comprobante' => '3333777', 'fecha_comprobante' => '2018-06-03','user_id'=> 18,'tarifario_id'=> 36, 'importe'=> 250, 'estado_recibo'=> 1,],
            ['num_comprobante' => '2222888', 'fecha_comprobante' => '2018-06-03','user_id'=> 18,'tarifario_id'=> 36, 'importe'=> 250, 'estado_recibo'=> 1,],//20

            ['num_comprobante' => '1111888', 'fecha_comprobante' => '2018-06-03','user_id'=> 19,'tarifario_id'=> 35, 'importe'=> 150, 'estado_recibo'=> 1,],
            ['num_comprobante' => '2222999', 'fecha_comprobante' => '2018-06-03','user_id'=> 19,'tarifario_id'=> 38, 'importe'=> 650, 'estado_recibo'=> 1,],

            ['num_comprobante' => '2222444', 'fecha_comprobante' => '2018-06-03','user_id'=> 20,'tarifario_id'=> 35, 'importe'=> 150, 'estado_recibo'=> 0,],

            ['num_comprobante' => '3333111', 'fecha_comprobante' => '2018-06-03','user_id'=> 21,'tarifario_id'=> 3, 'importe'=> 280, 'estado_recibo'=> 1,],
            ['num_comprobante' => '3333222', 'fecha_comprobante' => '2018-06-03','user_id'=> 22,'tarifario_id'=> 24, 'importe'=> 500, 'estado_recibo'=> 1,],
            ['num_comprobante' => '3333444', 'fecha_comprobante' => '2018-06-03','user_id'=> 23,'tarifario_id'=> 44, 'importe'=> 500, 'estado_recibo'=> 1,],
            ['num_comprobante' => '5555444', 'fecha_comprobante' => '2018-06-03','user_id'=> 9,'tarifario_id'=> 33, 'importe'=> 250, 'estado_recibo'=> 1,],//27
            //pago para inscripcion ingles
            ['num_comprobante' => '5555666', 'fecha_comprobante' => '2018-06-03','user_id'=> 3,'tarifario_id'=> 46, 'importe'=> 25, 'estado_recibo'=> 1,],//28
            ['num_comprobante' => '5555777', 'fecha_comprobante' => '2018-06-03','user_id'=> 10,'tarifario_id'=> 46, 'importe'=> 25, 'estado_recibo'=> 1,],//29
            ['num_comprobante' => '5555888', 'fecha_comprobante' => '2018-06-03','user_id'=> 10,'tarifario_id'=> 47, 'importe'=> 55, 'estado_recibo'=> 1,],//30
            ['num_comprobante' => '5555999', 'fecha_comprobante' => '2018-06-03','user_id'=> 11,'tarifario_id'=> 50, 'importe'=> 30, 'estado_recibo'=> 1,],//31
            ['num_comprobante' => '6666111', 'fecha_comprobante' => '2018-06-03','user_id'=> 11,'tarifario_id'=> 51, 'importe'=> 75, 'estado_recibo'=> 1,],//32
            ['num_comprobante' => '6666222', 'fecha_comprobante' => '2018-06-03','user_id'=> 12,'tarifario_id'=> 50, 'importe'=> 30, 'estado_recibo'=> 0,],//33
            ['num_comprobante' => '6666333', 'fecha_comprobante' => '2018-06-03','user_id'=> 26,'tarifario_id'=> 46, 'importe'=> 25, 'estado_recibo'=> 1,],//34
            ['num_comprobante' => '6666444', 'fecha_comprobante' => '2018-06-03','user_id'=> 26,'tarifario_id'=> 47, 'importe'=> 55, 'estado_recibo'=> 1,],//35
            ['num_comprobante' => '6666555', 'fecha_comprobante' => '2018-06-03','user_id'=> 27,'tarifario_id'=> 46, 'importe'=> 25, 'estado_recibo'=> 1,],//36
            ['num_comprobante' => '6666777', 'fecha_comprobante' => '2018-06-03','user_id'=> 13,'tarifario_id'=> 46, 'importe'=> 25, 'estado_recibo'=> 0,],//37
            ['num_comprobante' => '6666888', 'fecha_comprobante' => '2018-06-03','user_id'=> 22,'tarifario_id'=> 46, 'importe'=> 25, 'estado_recibo'=> 0,],//38
            ['num_comprobante' => '6666999', 'fecha_comprobante' => '2018-06-03','user_id'=> 20,'tarifario_id'=> 46, 'importe'=> 25, 'estado_recibo'=> 0,],//39
            ['num_comprobante' => '7777111', 'fecha_comprobante' => '2018-06-03','user_id'=> 32,'tarifario_id'=> 46, 'importe'=> 25, 'estado_recibo'=> 0,]//40
        ]);

        //programa_ncgt
        DB::table('programa_ncgts')->insert([
            //Diplomados
            ['programa_id' => '11', 'descripcion' => 'Diplomado en Gestion por Procesos', 'fecha_inicio'=> '2018-04-20', 'fecha_fin'=> '2018-06-20', 'horas'=> '100',
            'numero_modulo'=> '3',  'costo_matricula'=> '150', 'costo_modulo'=> '250', 'costo_diploma'=> '20', 'descuento_interno' => '50', 'descuento_modulo_total'=> '100', 'dependencia_id'=> 42,],
            ['programa_id' => '11', 'descripcion' => 'Diplomado en Tics', 'fecha_inicio'=> '2018-04-20', 'fecha_fin'=> '2018-06-20', 'horas'=> '150',
            'numero_modulo'=> '4',  'costo_matricula'=> '100', 'costo_modulo'=> '300', 'costo_diploma'=> '30', 'descuento_interno' => '50', 'descuento_modulo_total'=> '100', 'dependencia_id'=> 42,],
            //Programas de PROCAPT
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA DE SISTEMAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 42,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA AGRONOMICA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 16,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA AGROINDUSTRIAL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 17,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT MEDICINA HUMANA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 19,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT ODONTOLOGIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 20,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT PSICOLOGIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 21,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT ENFERMERIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 22,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT OBSTETRICIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 23,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT CIENCIAS ADMINISTRATIVAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 24,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT TURISMO Y HOTELERIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 25,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT CIENCIAS CONTABLES Y FINANCIERAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 26,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT ECONOMIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 27,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT SOCIOLOGIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 28,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT CIENCIAS DE LA COMUNICACION SOCIAL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 29,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT EDUCACION INICIAL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 30,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT EDUCACION PRIMARIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 31,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT EDUCACION FISICA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 32,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT FILOSOFIA, PSICOLOGIA Y CIENCIAS SOCIALES', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 33,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT LENGUA Y LITERATURA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 34,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT CIENCIAS HISTORICO SOCIALES Y GEOGRAFICAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 35,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT MATEMATICA Y FISICA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 36,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT BIOLOGIA, QUIMICA Y CIENCIA DEL AMBIENTE', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 37,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT DERECHO Y CIENCIAS POLITICAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 38,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA CIVIL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 39,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT ARQUITECTURA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 40,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA INDUSTRIAL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 41,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT MEDICINA VETERINARIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 43,],
            //PROMASTER
            ['programa_id' => '10', 'descripcion' => 'PROMASTER Ingenieria de Sistemas mencion TICs', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '900', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 46,]
        ]);
        //programas de centro de idiomas y estudios informaticos
        DB::table('programa_ncgts')->insert([
            [//programas de centro de idiomas 31
            'programa_id' => 7,
            'descripcion' => 'Ingles basico 2018-1 Grupo 1',
            'anio' =>2018,
            'fecha_inicio'=> '2018-06-01',
            'grupo'=>'1',
            'nivel'=>1,
            'idioma_tipo'=>1,
            'numero_modulo'=> 12,
            'costo_matricula'=> 25,
            'costo_modulo'=> 70,
            'descuento_interno' => 15,
            'dependencia_id'=> 65,
            ],
            [//programas de centro de idiomas 32
            'programa_id' => 7,
            'descripcion' => 'Ingles basico 2018-1 Grupo 2',
            'anio' =>2018,
            'fecha_inicio'=> '2018-07-01',
            'grupo'=>'2',
            'nivel'=>1,
            'idioma_tipo'=>1,
            'numero_modulo'=> 12,
            'costo_matricula'=> 25,
            'costo_modulo'=> 70,
            'descuento_interno' => 15,
            'dependencia_id'=> 65,
            ],
            [//programas de centro de idiomas 33
            'programa_id' => 7,
            'descripcion' => 'Ingles Intermedio 2018 Grupo 1',
            'anio' =>2018,
            'fecha_inicio'=> '2018-06-01',
            'grupo'=>'1',
            'nivel'=>2,
            'idioma_tipo'=>1,
            'numero_modulo'=> 12,
            'costo_matricula'=> 25,
            'costo_modulo'=> 70,
            'descuento_interno' => 15,
            'dependencia_id'=> 65,
            ],
            [//programas de estudios informaticos 34
            'programa_id' => 8,
            'descripcion' => 'Experto en Ofimatica',
            'anio' =>2018,
            'fecha_inicio'=> '2018-06-01',
            'grupo'=>'1',
            'nivel'=>1,
            'idioma_tipo'=>null,
            'numero_modulo'=> 4,
            'costo_matricula'=> 30,
            'costo_modulo'=> 90,
            'descuento_interno' => 15,
            'dependencia_id'=> 66,
            ],
            [//programas de estudios informaticos 35
            'programa_id' => 8,
            'descripcion' => 'Experto en Diseño grafico',
            'anio' =>2018,
            'fecha_inicio'=> '2018-06-01',
            'grupo'=>'1 ',
            'nivel'=>2,
            'idioma_tipo'=>null,
            'numero_modulo'=> 4,
            'costo_matricula'=> 30,
            'costo_modulo'=> 90,
            'descuento_interno' => 15,
            'dependencia_id'=> 66,
            ]
        ]);
        //docentes_otros
        DB::table('docente_otros')->insert([
            ['user_id' => 34, 'fecha_ingreso' => '2018-01-01', 'horas' => 20,],//docente de ingles
            ['user_id' => 35, 'fecha_ingreso' => '2018-01-01', 'horas' => 20,],//docente de ingles
            ['user_id' => 36, 'fecha_ingreso' => '2018-01-01', 'horas' => 20,],//docente de estudios informaticos
            ['user_id' => 37, 'fecha_ingreso' => '2018-01-01', 'horas' => 20,]//docente de estudios informaticos

        ]);

        //inscripcion_curso
        DB::table('curso_ncgts')->insert([
            //cursos de ingles
            ['nombre' => 'Basico 1', 'descripcion' => null,],//1
            ['nombre' => 'Basico 2', 'descripcion' => null,],
            ['nombre' => 'Basico 3', 'descripcion' => null,],
            ['nombre' => 'Basico 4', 'descripcion' => null,],
            ['nombre' => 'Basico 5', 'descripcion' => null,],
            ['nombre' => 'Basico 6', 'descripcion' => null,],
            ['nombre' => 'Basico 7', 'descripcion' => null,],
            ['nombre' => 'Basico 8', 'descripcion' => null,],
            ['nombre' => 'Basico 9', 'descripcion' => null,],
            ['nombre' => 'Basico 10', 'descripcion' => null,],
            ['nombre' => 'Basico 11', 'descripcion' => null,],
            ['nombre' => 'Basico 12', 'descripcion' => null,],
            ['nombre' => 'Intermedio 1', 'descripcion' => null,],//13
            ['nombre' => 'Intermedio 2', 'descripcion' => null,],
            ['nombre' => 'Intermedio 3', 'descripcion' => null,],
            ['nombre' => 'Intermedio 4', 'descripcion' => null,],
            ['nombre' => 'Intermedio 5', 'descripcion' => null,],
            ['nombre' => 'Intermedio 6', 'descripcion' => null,],
            ['nombre' => 'Intermedio 7', 'descripcion' => null,],
            ['nombre' => 'Intermedio 8', 'descripcion' => null,],
            ['nombre' => 'Intermedio 9', 'descripcion' => null,],
            ['nombre' => 'Intermedio 10', 'descripcion' => null,],
            ['nombre' => 'Intermedio 11', 'descripcion' => null,],
            ['nombre' => 'Intermedio 12', 'descripcion' => null,],
            ['nombre' => 'Avanzado 1', 'descripcion' => null,],//25
            ['nombre' => 'Avanzado 2', 'descripcion' => null,],
            ['nombre' => 'Avanzado 3', 'descripcion' => null,],
            ['nombre' => 'Avanzado 4', 'descripcion' => null,],
            ['nombre' => 'Avanzado 5', 'descripcion' => null,],
            ['nombre' => 'Avanzado 6', 'descripcion' => null,],
            ['nombre' => 'Avanzado 7', 'descripcion' => null,],
            ['nombre' => 'Avanzado 8', 'descripcion' => null,],
            ['nombre' => 'Avanzado 9', 'descripcion' => null,],
            ['nombre' => 'Avanzado 10', 'descripcion' => null,],
            ['nombre' => 'Avanzado 11', 'descripcion' => null,],
            ['nombre' => 'Avanzado 12', 'descripcion' => null,],
            //cursos de estudios informaticos
            ['nombre' => 'TIC´S', 'descripcion' => null,],//37
            ['nombre' => 'Word', 'descripcion' => null,],
            ['nombre' => 'Excel', 'descripcion' => null,],
            ['nombre' => 'Power Point', 'descripcion' => null,],
            ['nombre' => 'Corel Draw', 'descripcion' => null,],//41
            ['nombre' => 'Adobe Photoshop', 'descripcion' => null,],
            ['nombre' => 'Adobe  Indesing', 'descripcion' => null,],
            ['nombre' => 'Adobe Muse', 'descripcion' => null,],
            ['nombre' => 'Excel Profesional', 'descripcion' => null,],
            ['nombre' => 'Excel y Visual Basic', 'descripcion' => null,],
            ['nombre' => 'Acces', 'descripcion' => null,],
            ['nombre' => 'MS Project', 'descripcion' => null,],
            ['nombre' => 'HTML y CSS', 'descripcion' => null,],
            ['nombre' => 'Bootstrap', 'descripcion' => null,],
            ['nombre' => 'Adobe Animate', 'descripcion' => null,],//51
            ['nombre' => 'Java Script Y Jquery', 'descripcion' => null,],
            ['nombre' => 'Sony Vegas', 'descripcion' => null,],
            ['nombre' => 'Adobe Premier', 'descripcion' => null,],
            ['nombre' => 'Adobe After Effects', 'descripcion' => null,],
            ['nombre' => 'Taller Multimedia', 'descripcion' => null,],
            ['nombre' => 'Ensamblajes de Pc´s', 'descripcion' => null,],
            ['nombre' => 'Mantenimiento de Pc´s', 'descripcion' => null,],
            ['nombre' => 'Software de Utilitarios', 'descripcion' => null,],
            ['nombre' => 'Diagnóstico y Reparación de Pc´s', 'descripcion' => null,],
            ['nombre' => 'AUTOCAD Básico', 'descripcion' => null,],
            ['nombre' => 'AUTOCAD Intermedio', 'descripcion' => null,],//61
            ['nombre' => 'AUTOCAD Avanzado', 'descripcion' => null,],
            ['nombre' => '3D STUDIO MAX', 'descripcion' => null,],
            ['nombre' => 'Fundamentos de Programación', 'descripcion' => null,],
            ['nombre' => 'Aplicaciones de Escritorio', 'descripcion' => null,],
            ['nombre' => 'Aplicaciones Web', 'descripcion' => null,],
            ['nombre' => 'Gestión de Base de Datos con MYSQL', 'descripcion' => null,],
            ['nombre' => 'SCRATCH Básico', 'descripcion' => null,],
            ['nombre' => 'SCRATCH Avanzado', 'descripcion' => null,],
            ['nombre' => 'KODU GAME LAB Básico', 'descripcion' => null,],
            ['nombre' => 'KODU GAME LAB Avanzado', 'descripcion' => null,],//71
            ['nombre' => 'Programación Mblock', 'descripcion' => null,],
            ['nombre' => 'Sensortes de ARDUINO', 'descripcion' => null,],
            ['nombre' => 'Robótica con ARDUINO', 'descripcion' => null,],
            ['nombre' => 'Proyecto Robot con ARDUINO', 'descripcion' => null,],
            ['nombre' => 'Fundamentos de Programación con PHP', 'descripcion' => null,],
            ['nombre' => 'Gestión de Base de Datos con MYSQL', 'descripcion' => null,],
            ['nombre' => 'Sistema Web con PHP y MYSQL', 'descripcion' => null,],
            ['nombre' => 'Proyecto de Sistema Web', 'descripcion' => null,],
            ['nombre' => 'Cinema 4D Básico', 'descripcion' => null,],
            ['nombre' => 'Cinema 4D Avanzado', 'descripcion' => null,],//81
            ['nombre' => '3D Studio Max Básico', 'descripcion' => null,],
            ['nombre' => '3D Studio Max Avanzado', 'descripcion' => null,],
            ['nombre' => 'Conectividad y Cableado Estructurado', 'descripcion' => null,],
            ['nombre' => 'Redes Inalambricas y Antenas', 'descripcion' => null,],
            ['nombre' => 'Instalación y Virtalización de Servidores', 'descripcion' => null,],
            ['nombre' => 'Administración de Red', 'descripcion' => null,],
            ['nombre' => 'ARCHICAD Básico', 'descripcion' => null,],
            ['nombre' => 'ARCHICAD Intermedio', 'descripcion' => null,],
            ['nombre' => 'ARCHICAD Avanzado', 'descripcion' => null,],
            ['nombre' => 'Integración con 3D Stuio Max', 'descripcion' => null,],//91
            ['nombre' => 'App Inventor', 'descripcion' => null,],
            ['nombre' => 'Android Básico', 'descripcion' => null,],
            ['nombre' => 'Android Avanzado', 'descripcion' => null,],
            ['nombre' => 'Proyecto Aplicación Móvil', 'descripcion' => null,],
            ['nombre' => 'Unreal Development kit Básico', 'descripcion' => null,],
            ['nombre' => 'Unreal Development kit Avanzado', 'descripcion' => null,],
            ['nombre' => 'Unity Básico', 'descripcion' => null,],
            ['nombre' => 'Unity Avanzado', 'descripcion' => null,],
            //curso de los diplomados
            ['nombre' => 'Gestion por procesos',//100
                'descripcion' => 'Presenta la diferencia entre el enfoque funcional y el enfoque de procesos',],
            ['nombre' => 'Estadistica aplicada a los procesos',//101
                'descripcion' => 'El curso proporciona las bases estadísticas para poder representar y manipular las variables cuantitativas de los procesos',],
            ['nombre' => 'Modelamiento de procesos',//102
                'descripcion' => 'Presenta diferentes metodologías que permiten modelar los procesos de la organización con el fin de entender y gestionar el comportamiento',],

        ]);

        //cursos disponibles de los diplomados, idiomas y estudios informaticos
        DB::table('curso_ncgt_disponibles')->insert([
            //cursos de diplomado
            [//1
                'curso_ncgt_id' => 100,
                'ciclo'=>null,
                'docente_otro_id'=>null,
                'programa_ncgt_id'=>1,
            ],
            [//2
                'curso_ncgt_id' => 101,
                'ciclo'=>null,
                'docente_otro_id'=>null,
                'programa_ncgt_id'=>1,
            ],
            [//3
                'curso_ncgt_id' => 102,
                'ciclo'=>null,
                'docente_otro_id'=>null,
                'programa_ncgt_id'=>1,
            ],
            //cursos de ingles
            [//4
                'curso_ncgt_id' => 1,
                'ciclo'=>1,
                'docente_otro_id'=>1,
                'programa_ncgt_id'=>31,
            ],
            [//5
                'curso_ncgt_id' => 2,
                'ciclo'=>2,
                'docente_otro_id'=>1,
                'programa_ncgt_id'=>31,
            ],
            [//6
                'curso_ncgt_id' => 3,
                'ciclo'=>3,
                'docente_otro_id'=>1,
                'programa_ncgt_id'=>31,
            ],
            [//7
                'curso_ncgt_id' => 4,
                'ciclo'=>4,
                'docente_otro_id'=>1,
                'programa_ncgt_id'=>31,
            ],
            [//8
                'curso_ncgt_id' => 5,
                'ciclo'=>5,
                'docente_otro_id'=>1,
                'programa_ncgt_id'=>31,
            ],
            [//9
                'curso_ncgt_id' => 6,
                'ciclo'=>6,
                'docente_otro_id'=>1,
                'programa_ncgt_id'=>31,
            ],

            [//10 ingles intermedio
                'curso_ncgt_id' => 13,
                'ciclo'=>1,
                'docente_otro_id'=>2,
                'programa_ncgt_id'=>33,
            ],
            [//11
                'curso_ncgt_id' => 14,
                'ciclo'=>2,
                'docente_otro_id'=>2,
                'programa_ncgt_id'=>33,
            ],
            [//12
                'curso_ncgt_id' => 15,
                'ciclo'=>3,
                'docente_otro_id'=>2,
                'programa_ncgt_id'=>33,
            ],
            [//13
                'curso_ncgt_id' => 16,
                'ciclo'=>4,
                'docente_otro_id'=>2,
                'programa_ncgt_id'=>33,
            ],
            [//14
                'curso_ncgt_id' => 17,
                'ciclo'=>5,
                'docente_otro_id'=>2,
                'programa_ncgt_id'=>33,
            ],
            [//15
                'curso_ncgt_id' => 18,
                'ciclo'=>6,
                'docente_otro_id'=>2,
                'programa_ncgt_id'=>33,
            ],
            //cursos de estudios informaticos
            [//16 estudios informaticos de ofimatica
                'curso_ncgt_id' => 37,
                'ciclo'=>null,
                'docente_otro_id'=>3,
                'programa_ncgt_id'=>34,
            ],
            [//17
                'curso_ncgt_id' => 38,
                'ciclo'=>null,
                'docente_otro_id'=>3,
                'programa_ncgt_id'=>34,
            ],
            [//18
                'curso_ncgt_id' => 39,
                'ciclo'=>null,
                'docente_otro_id'=>3,
                'programa_ncgt_id'=>34,
            ],
            [//19
                'curso_ncgt_id' => 40,
                'ciclo'=>null,
                'docente_otro_id'=>3,
                'programa_ncgt_id'=>34,
            ],
            [//20 estudios informaticos de diseño grafico
                'curso_ncgt_id' => 41,
                'ciclo'=>null,
                'docente_otro_id'=>4,
                'programa_ncgt_id'=>35,
            ],
            [//21
                'curso_ncgt_id' => 42,
                'ciclo'=>null,
                'docente_otro_id'=>4,
                'programa_ncgt_id'=>35,
            ],
            [//18
                'curso_ncgt_id' => 43,
                'ciclo'=>null,
                'docente_otro_id'=>4,
                'programa_ncgt_id'=>35,
            ],
            [//19
                'curso_ncgt_id' => 44,
                'ciclo'=>null,
                'docente_otro_id'=>4,
                'programa_ncgt_id'=>35,
            ]
                
        ]);
         //inscripcion_ncgtss
        DB::table('inscripcion_ncgts')->insert([
                ['user_id' => 12, 'programa_ncgt_id' => 1,'es_interno'=>1,],//inscripcion de pedro a diplomado procesos
                ['user_id' => 13, 'programa_ncgt_id' => 3,'es_interno'=>1,],
                ['user_id' => 16, 'programa_ncgt_id' => 2,'es_interno'=>null,],
                ['user_id' => 17, 'programa_ncgt_id' => 1,'es_interno'=>null,],
                ['user_id' => 18, 'programa_ncgt_id' => 2,'es_interno'=>null,],
                ['user_id' => 18, 'programa_ncgt_id' => 1,'es_interno'=>null,],
                ['user_id' => 19, 'programa_ncgt_id' => 1,'es_interno'=>null,],
                ['user_id' => 23, 'programa_ncgt_id' => 30,'es_interno'=>null,],
            //inscripcion idiomas y estudios informaticos
                ['user_id' => 3, 'programa_ncgt_id' => 31,'es_interno'=>1,],//9
                ['user_id' => 10, 'programa_ncgt_id' => 31,'es_interno'=>1,],
                ['user_id' => 11, 'programa_ncgt_id' => 34,'es_interno'=>1,],
                ['user_id' => 26, 'programa_ncgt_id' => 31,'es_interno'=>1,],
                ['user_id' => 27, 'programa_ncgt_id' => 31,'es_interno'=>1,]
        ]);

        //control pago
        DB::table('control_pagos')->insert([
                ['inscripcion_ncgt_id' => 1, 'postulacion_id' => null,'pago_id' => '3','tipo'=> 1,],//tipo 1 = matricula
                ['inscripcion_ncgt_id' => 1, 'postulacion_id' => null,'pago_id' => '4','tipo'=> 2,],//tipo 2 = modulo
                ['inscripcion_ncgt_id' => 1, 'postulacion_id' => null,'pago_id' => '5','tipo'=> 3,],//tipo 3 = diploma

                ['inscripcion_ncgt_id' => 2, 'postulacion_id' => null,'pago_id' => 6,'tipo'=> 1,],//inscripcions procapt
                ['inscripcion_ncgt_id' => 2, 'postulacion_id' => null,'pago_id' => 7,'tipo'=> 2,],//modulo PROCATP

                ['inscripcion_ncgt_id' => 3, 'postulacion_id' => null,'pago_id' => 10,'tipo'=> 1,],//matricula TICs
                ['inscripcion_ncgt_id' => 3, 'postulacion_id' => null,'pago_id' => 11,'tipo'=> 2,],//modulo TICs

                ['inscripcion_ncgt_id' => 4, 'postulacion_id' => null,'pago_id' => 12,'tipo'=> 1,],//matricula procesos
                ['inscripcion_ncgt_id' => 4, 'postulacion_id' => null,'pago_id' => 13,'tipo'=> 2,],//modulo procesos
                ['inscripcion_ncgt_id' => 4, 'postulacion_id' => null,'pago_id' => 14,'tipo'=> 2,],//modulo procesos

                ['inscripcion_ncgt_id' => 5, 'postulacion_id' => null,'pago_id' => 15,'tipo'=> 1,],//matricula tics
                ['inscripcion_ncgt_id' => 5, 'postulacion_id' => null,'pago_id' => 16,'tipo'=> 2,],//modulo tics
                ['inscripcion_ncgt_id' => 5, 'postulacion_id' => null,'pago_id' => 17,'tipo'=> 2,],//modulo tics

                ['inscripcion_ncgt_id' => 6, 'postulacion_id' => null,'pago_id' => 18,'tipo'=> 1,],//matricula procesos
                ['inscripcion_ncgt_id' => 6, 'postulacion_id' => null,'pago_id' => 19,'tipo'=> 2,],//modulo procesos
                ['inscripcion_ncgt_id' => 6, 'postulacion_id' => null,'pago_id' => 20,'tipo'=> 2,],//modulo procesos

                ['inscripcion_ncgt_id' => 7, 'postulacion_id' => null,'pago_id' => 21,'tipo'=> 1,],//matricula procesos
                ['inscripcion_ncgt_id' => 7, 'postulacion_id' => null,'pago_id' => 22,'tipo'=> 2,],//modulo procesos
                
                ['inscripcion_ncgt_id' => 8, 'postulacion_id' => null,'pago_id' => 26,'tipo'=> 1,],//inscripcions promaster

                ['inscripcion_ncgt_id' => null, 'postulacion_id' => 1,'pago_id' => 24,'tipo'=> 1,],//inscripcion pregrado general
                ['inscripcion_ncgt_id' => null, 'postulacion_id' => 2,'pago_id' => 25,'tipo'=> 1,],//inscripcon CEPREVAL
                ['inscripcion_ncgt_id' => null, 'postulacion_id' => 3,'pago_id' => 27,'tipo'=> 1,],
                //control de idiomas
                ['inscripcion_ncgt_id' => 9, 'postulacion_id' => null,'pago_id' => 28,'tipo'=> 1,],
                ['inscripcion_ncgt_id' => 10, 'postulacion_id' => null,'pago_id' => 29,'tipo'=> 1,],
                ['inscripcion_ncgt_id' => 11, 'postulacion_id' => null,'pago_id' => 31,'tipo'=> 1,],
                ['inscripcion_ncgt_id' => 12, 'postulacion_id' => null,'pago_id' => 34,'tipo'=> 1,],
                ['inscripcion_ncgt_id' => 13, 'postulacion_id' => null,'pago_id' => 36,'tipo'=> 1,],

                ['inscripcion_ncgt_id' => 10, 'postulacion_id' => null,'pago_id' => 30,'tipo'=> 2,],
                ['inscripcion_ncgt_id' => 11, 'postulacion_id' => null,'pago_id' => 32,'tipo'=> 2,],
                ['inscripcion_ncgt_id' => 12, 'postulacion_id' => null,'pago_id' => 35,'tipo'=> 2,]
        ]);

        //inscripcion_modulo
       /* DB::table('inscripcion_modulos')->insert([
                ['inscripcion_modulo' => 'OFIMÁTICA',],
                ['inscripcion_modulo' => 'DISEÑO GRÁFICO',],
                ['inscripcion_modulo' => 'OFIMÁTICA AVANZADO',],
                ['inscripcion_modulo' => 'DISEÑO WEB',],
                ['inscripcion_modulo' => 'EDICION DE VIDEOS',],
                ['inscripcion_modulo' => 'ENSAMBLAJES Y MANTENIMIENTO DE PC´S',],
                ['inscripcion_modulo' => 'AUTOCAD',],
                ['inscripcion_modulo' => 'PROGRAMACIÓN JAVA',],
                ['inscripcion_modulo' => 'DISEÑO DE VIDEO JUEGOS',],
                ['inscripcion_modulo' => 'ROBÓTICA BÁSICA CON ARDUINO',],
                ['inscripcion_modulo' => 'DESARROLLO DE SISTEMAS WEB',],
                ['inscripcion_modulo' => 'ANIMACIÓN 3D',],
                ['inscripcion_modulo' => 'ADMINISTRACIÓN DE REDES',],
                ['inscripcion_modulo' => 'DISEÑO ARQUITECTONICO',],
                ['inscripcion_modulo' => 'DESARROLLO DE APLICACIONES MÓVILES',],
                ['inscripcion_modulo' => 'DESARROLLO DE VIDEOJUEGOS',]
            ]);*/


    }
}
