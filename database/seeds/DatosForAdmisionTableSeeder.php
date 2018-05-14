<?php

use Illuminate\Database\Seeder;

class DatosForAdmisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Programa
        DB::table('programas')->insert([
                ['programa' => 'Pregrado',],
                ['programa' => 'Posgrado maestria',],
                ['programa' => 'Posgrado doctorado',],
                ['programa' => 'Posgrado posdoctorado',],
                ['programa' => 'Segunda especialidad',],
                ['programa' => 'Estudios complementario',],
                ['programa' => 'Idiomas',],
                ['programa' => 'Educacióna Distancia y Formación Continua',],
                ['programa' => 'PROCAPT',],
                ['programa' => 'PROMASTER',],
                ['programa' => 'Diplomado',],
                ['programa' => 'CEPREVAL',]
            ]);

         // Postulacion modalidades
        DB::table('postulacion_modalidads')->insert([
                
                ['modalidad' => 'Examen de selecion general', 'tipo_examen' => '1',],//examen tipo 1 ordinario, 2 preferencial
                ['modalidad' => 'Examen preferencial', 'tipo_examen' => '2',],
                ['modalidad' => 'cepreval', 'tipo_examen' => '1',],
                ['modalidad' => 'cepreval preferencial', 'tipo_examen' => '2',],
                ['modalidad' => 'Primeros Puestos', 'tipo_examen' => '1',],
                ['modalidad' => 'Víctimas del Terrorismo y Plan Integral de Reparaciones', 'tipo_examen' => '1',],
                ['modalidad' => 'Personas con Discapacidad', 'tipo_examen' => '1',],
                ['modalidad' => 'Graduados y titulados en universidades del país o del extranjero', 'tipo_examen' => '1',],
                ['modalidad' => 'Traslado Externo', 'tipo_examen' => '1',],
                ['modalidad' => 'Traslado Interno', 'tipo_examen' => '1',],
                ['modalidad' => 'Licenciados de las Fuerzas Armadas', 'tipo_examen' => '1',],
                ['modalidad' => 'Egresados del COAR', 'tipo_examen' => '1',],
                ['modalidad' => 'Egresados del Colegio Nacional de Aplicación', 'tipo_examen' => '1',],
                ['modalidad' => 'Egresados de la Institución Educativa Agropecuaria Mariano Adrián Meza Rosales', 'tipo_examen' => '1',],
                ['modalidad' => 'Deportistas Calicados y Deportistas Destacados', 'tipo_examen' => '1',],
                ['modalidad' => 'Hijos de Comunidades Campesinas y/o Nativas', 'tipo_examen' => '1',],
                ['modalidad' => 'Estudiantes del CENFOTEC UNHEVAL', 'tipo_examen' => '1',]
                
            ]);

        // Postulacion ciclo
        DB::table('postulacion_ciclos')->insert([
                ['postulacion_ciclo' => 'A',],
                ['postulacion_ciclo' => 'B',],
                ['postulacion_ciclo' => 'C',]
            ]);

        // Postulacion situacion
        DB::table('postulacion_situacions')->insert([
                ['postulacion_situacion' => 'Alcanzó vacante',],
                ['postulacion_situacion' => 'No alcanzó vacante',],
                ['postulacion_situacion' => 'Libre',]
            ]);
        // Postulacion preparacion
        DB::table('postulacion_preparacions')->insert([
                ['postulacion_preparacion' => 'CEPREVAL',],
                ['postulacion_preparacion' => 'Academia',],
                ['postulacion_preparacion' => 'Tutor particular',],
                ['postulacion_preparacion' => 'Autoestudio',]
            ]);

        //proceso de seleccion
        DB::table('proceso_seleccions')->insert([
            ['descripcion' => 'Seleccion general', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 1,  'descuento' => null,],
            ['descripcion' => 'CEPREVAL', 'anio' => '2018', 'etapa' => null, 'postulacion_ciclo_id' => 1,
                'programa_id' => 1,  'postulacion_modalidad_id' => 3,  'descuento' => null,],
            ['descripcion' => 'Seleccion general de maestria', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 2,  'postulacion_modalidad_id' => null,  'descuento' => null,],
            ['descripcion' => 'Seleccion general de doctorado', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 3,  'postulacion_modalidad_id' => null,  'descuento' => null,]
        ]);
        //postulacion
        DB::table('postulacions')->insert([
            ['users_id' => 7, 'proceso_seleccion_id' => 1, 'escuela_sede_id' => 1, 'postulacion_preparacion_id' => 2,
                'postulacion_tipo' => 1,  'postulacion_situacion_id' => null,  'maestria_id' => null, 'doctorado_id' => null, 'segunda_especialidad_id' => null,
                'estudios_complementario_id' => null, 'grado_bachiller_id' => null, 'grado_magister_id' => null, 'grado_doctor_id' => null,],
            ['users_id' => 9, 'proceso_seleccion_id' => 2, 'escuela_sede_id' => 5, 'postulacion_preparacion_id' => 1,
                'postulacion_tipo' => 1,  'postulacion_situacion_id' => null,  'maestria_id' => null, 'doctorado_id' => null, 'segunda_especialidad_id' => null,
                'estudios_complementario_id' => null, 'grado_bachiller_id' => null, 'grado_magister_id' => null, 'grado_doctor_id' => null,]
        ]);
    }
}
