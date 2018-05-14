<?php

use Illuminate\Database\Seeder;

class DatosForEnsenanzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Actividades no lectivas
        $actividad = new \App\ActNoLectiva();
        $actividad->actividad='Investigación';
        $actividad->descripcion='Horas dedicadas a la semana al desarrollo de la Investigación';
        $actividad->save();

        $actividad = new \App\ActNoLectiva();
        $actividad->actividad='Responsabilidad Social';
        $actividad->descripcion='Horas dedicadas a la semana al desarrollo de la Responsabilidad Social';
        $actividad->save();

        $actividad = new \App\ActNoLectiva();
        $actividad->actividad='Tutoría y Consejería';
        $actividad->descripcion='Horas dedicadas a la semana al desarrollo de la Tutoría y Consejería';
        $actividad->save();

        $actividad = new \App\ActNoLectiva();
        $actividad->actividad='Producción Intelectual';
        $actividad->descripcion='Horas dedicadas a la semana al desarrollo de su Producción Intelectual';
        $actividad->save();

        $actividad = new \App\ActNoLectiva();
        $actividad->actividad='Comisiones';
        $actividad->descripcion='Horas dedicadas a la semana al desarrollo de las actividades y responsabilidades como miembro de alguna comisión';
        $actividad->save();

        $actividad = new \App\ActNoLectiva();
        $actividad->actividad='Capacitaciones';
        $actividad->descripcion='Horas dedicadas a la semana al desarrollo de capacitaciones de fortalecimiento de capacidades';
        $actividad->save();

        //ambientes
        DB::table('tipo_ambientes')->insert([
                ['nombre' => 'Aula',],
                ['nombre' => 'Taller',],
                ['nombre' => 'Laboratorio',],
                ['nombre' => 'Biblioteca',],
                ['nombre' => 'Centro de Computo',],
                ['nombre' => 'Auditorio',]
            ]);
        /*//plan de estudios
        $plan = new \App\PlanEstudio();
        $plan->resolucion='unheval';
        $plan->archivo='g';
        $plan->anio='1999';
        $plan->estado='1';
        $plan->escuela_id='30';
        $plan->save();

        $plan = new \App\PlanEstudio();
        $plan->resolucion='unheval';
        $plan->archivo='g';
        $plan->anio='2005';
        $plan->estado='1';
        $plan->escuela_id='30';
        $plan->save();
        //cursos
        $curso = new \App\Curso();
        $curso->codigo='001';
        $curso->nombre='calculo i';
        $curso->ciclo='1';
        $curso->creditos='4';
        $curso->hteoria='4';
        $curso->hpractica='2';
        $curso->plan_estudio_id='1';
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='002';
        $curso->nombre='caculo ii';
        $curso->ciclo='1';
        $curso->creditos='4';
        $curso->hteoria='2';
        $curso->hpractica='4';
        $curso->plan_estudio_id='1';
        $curso->save();

        $docente = new \App\Docente();
                $docente->user_id='1';
                $docente->escuela_id='30';
                $docente->docente_categoria_id='1';
                $docente->docente_condicion_id='1';
                $docente->docente_dedicacion_id='1';
                $docente->dep_academico_id='1';
                $docente->h_lectivas='20';
                $docente->h_n_lectivas='20';
                $docente->save();*/

    }
}
