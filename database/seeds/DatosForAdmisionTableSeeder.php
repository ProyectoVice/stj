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
        // Postulacion examen tipo
        DB::table('postulacion_examen_tipos')->insert([
                ['postulacion_examen_tipo' => 'Ordinario',],
                ['postulacion_examen_tipo' => 'Preferencial',]                
            ]);
         // Postulacion modalidades
        DB::table('postulacion_modalidads')->insert([
                
                ['modalidad' => 'Examen de selecion general', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Examen preferencial', 'postulacion_examen_tipo_id' => '2',],
                ['modalidad' => 'cepreval', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'cepreval preferencial', 'postulacion_examen_tipo_id' => '2',],
                ['modalidad' => 'Primeros Puestos', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Víctimas del Terrorismo y Plan Integral de Reparaciones', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Personas con Discapacidad', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Graduados y titulados en universidades del país o del extranjero', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Traslado Externo', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Traslado Interno', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Licenciados de las Fuerzas Armadas', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Egresados del COAR', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Egresados del Colegio Nacional de Aplicación', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Egresados de la Institución Educativa Agropecuaria Mariano Adrián Meza Rosales', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Deportistas Calicados y Deportistas Destacados', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Hijos de Comunidades Campesinas y/o Nativas', 'postulacion_examen_tipo_id' => '1',],
                ['modalidad' => 'Estudiantes del CENFOTEC UNHEVAL', 'postulacion_examen_tipo_id' => '1',]
                
            ]);
        // Postulacion etapa
        DB::table('postulacion_etapas')->insert([
                ['postulacion_etapa' => 'I',],
                ['postulacion_etapa' => 'II',]                
            ]);
        // Postulacion ciclo
        DB::table('postulacion_ciclos')->insert([
                ['postulacion_ciclo' => 'A',],
                ['postulacion_ciclo' => 'B',],
                ['postulacion_ciclo' => 'C',]                
            ]);
        // Postulacion tipo
        DB::table('postulacion_tipos')->insert([
                ['postulacion_tipo' => 'Regular',],
                ['postulacion_tipo' => 'Libre',]                
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
