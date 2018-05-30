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
                ['programa' => 'Segunda especialidad Educacion',],
                ['programa' => 'Estudios complementario',],
                ['programa' => 'Idiomas',],
                ['programa' => 'Educacióna Distancia y Formación Continua',],
                ['programa' => 'PROCAPT',],
                ['programa' => 'PROMASTER',],
                ['programa' => 'Diplomado',],
                ['programa' => 'CEPREVAL',],
                ['programa' => 'Segunda especialidad Enfermeria',]
            ]);

         // Postulacion modalidades
        DB::table('postulacion_modalidads')->insert([
                
                ['modalidad' => 'Examen de selecion general', 'tipo_examen' => '1',],//examen tipo 1 ordinario, 2 preferencial
                ['modalidad' => 'Examen preferencial', 'tipo_examen' => '2',],
                ['modalidad' => 'Cepreval', 'tipo_examen' => '1',],
                ['modalidad' => 'Cepreval preferencial', 'tipo_examen' => '2',],
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
            ['descripcion' => 'Seleccion general 2018-I', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 1,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Seleccion general 2018-I', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 2, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Seleccion general 2018-I', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => null, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 5,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 6, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 7,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 8, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 9,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 10, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 11,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 12, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 13, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 14,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 15, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 16,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de selección modalidades 2018', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 17, 'descuento' => null, 'sede_desentralizada_pre'=>null,],

            ['descripcion' => 'CEPREVAL 2018 A', 'anio' => '2018', 'etapa' => null, 'postulacion_ciclo_id' => 1,
                'programa_id' => 12,  'postulacion_modalidad_id' => 3, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'CEPREVAL 2018 B', 'anio' => '2018', 'etapa' => null, 'postulacion_ciclo_id' => 2,
                'programa_id' => 12,  'postulacion_modalidad_id' => 3, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'CEPREVAL 2018 C', 'anio' => '2018', 'etapa' => null, 'postulacion_ciclo_id' => 3,
                'programa_id' => 12,  'postulacion_modalidad_id' => 3, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'CEPREVAL Preferencial 2018 A', 'anio' => '2018', 'etapa' => null, 'postulacion_ciclo_id' => 1,
                'programa_id' => 12,  'postulacion_modalidad_id' => 4, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'CEPREVAL Preferencial 2018 B', 'anio' => '2018', 'etapa' => null, 'postulacion_ciclo_id' => 2,
                'programa_id' => 12,  'postulacion_modalidad_id' => 4, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'CEPREVAL Preferencial 2018 C', 'anio' => '2018', 'etapa' => null, 'postulacion_ciclo_id' => 3,
                'programa_id' => 12,  'postulacion_modalidad_id' => 4, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Seleccion general 2018-II', 'anio' => '2018', 'etapa' => 2, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 1,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Seleccion general 2018-II', 'anio' => '2018', 'etapa' => 2, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => 2, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Seleccion general 2018-II', 'anio' => '2018', 'etapa' => 2, 'postulacion_ciclo_id' => null,
                'programa_id' => 1,  'postulacion_modalidad_id' => null, 'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Maestria y Doctorados 2018-I', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 2,  'postulacion_modalidad_id' => null,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Maestria y Doctorados 2018-I', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 3,  'postulacion_modalidad_id' => null,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Maestria y Doctorados 2018-II', 'anio' => '2018', 'etapa' => 2, 'postulacion_ciclo_id' => null,
                'programa_id' => 2,  'postulacion_modalidad_id' => null,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Maestria y Doctorados 2018-II', 'anio' => '2018', 'etapa' => 2, 'postulacion_ciclo_id' => null,
                'programa_id' => 3,  'postulacion_modalidad_id' => null,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Posdoctorado 2018', 'anio' => '2018', 'etapa' => null, 'postulacion_ciclo_id' => null,
                'programa_id' => 4,  'postulacion_modalidad_id' => null,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Segunda Especialidad Eduacion 2018-I', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 5,  'postulacion_modalidad_id' => null,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Segunda Especialidad Eduacion 2018-II', 'anio' => '2018', 'etapa' => 2, 'postulacion_ciclo_id' => null,
                'programa_id' => 5,  'postulacion_modalidad_id' => null,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Estudios complementarios Educacion 2018-I', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
                'programa_id' => 6,  'postulacion_modalidad_id' => null,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Estudios complementarios Educacion 2018-II', 'anio' => '2018', 'etapa' => 2, 'postulacion_ciclo_id' => null,
                'programa_id' => 6,  'postulacion_modalidad_id' => null,  'descuento' => null, 'sede_desentralizada_pre'=>null,],
            ['descripcion' => 'Examen de las Sedes desentralizadas 2018 I ', 'anio' => '2018', 'etapa' => 1, 'postulacion_ciclo_id' => null,
            'programa_id' => 1,  'postulacion_modalidad_id' => 1,  'descuento' => null, 'sede_desentralizada_pre'=>1,]
        ]);
        //postulacion
        DB::table('postulacions')->insert([
            ['users_id' => 21, 'proceso_seleccion_id' => 1, 'sede_id' => 1, 'escuela_id' => 1, 'postulacion_preparacion_id' => 2,
                'postulacion_tipo' => 1,  'postulacion_situacion_id' => null,  'maestria_id' => null, 'doctorado_id' => null, 'segunda_especialidad_id' => null,
                'estudios_complementario_id' => null, 'grado_bachiller_id' => null, 'grado_magister_id' => null, 'grado_doctor_id' => null,],
            ['users_id' => 22, 'proceso_seleccion_id' => 17, 'sede_id' => 1, 'escuela_id' => 2, 'postulacion_preparacion_id' => 1,
                'postulacion_tipo' => 1,  'postulacion_situacion_id' => null,  'maestria_id' => null, 'doctorado_id' => null, 'segunda_especialidad_id' => null,
                'estudios_complementario_id' => null, 'grado_bachiller_id' => null, 'grado_magister_id' => null, 'grado_doctor_id' => null,],
            ['users_id' => 9, 'proceso_seleccion_id' => 26, 'sede_id' => 1, 'escuela_id' => null, 'postulacion_preparacion_id' => null,
                'postulacion_tipo' => null,  'postulacion_situacion_id' => null,  'maestria_id' => 18, 'doctorado_id' => null, 'segunda_especialidad_id' => null,
                'estudios_complementario_id' => null, 'grado_bachiller_id' => null, 'grado_magister_id' => null, 'grado_doctor_id' => null,]
        ]);
    }
}
