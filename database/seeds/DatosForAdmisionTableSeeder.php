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
                ['programa' => 'Diplomado',]                
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
    }
}
