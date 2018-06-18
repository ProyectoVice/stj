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
        
//plan de estudios
        $plan = new \App\PlanEstudio();
        $plan->resolucion='N 450 Consejo Universitario';
        $plan->archivo='g';
        $plan->anio='1999';
        $plan->estado='1';
        $plan->escuela_id=30;
        $plan->save();

        $plan = new \App\PlanEstudio();
        $plan->resolucion='N 230 Consejo Universitario';
        $plan->archivo='g';
        $plan->anio='2005';
        $plan->estado='1';
        $plan->escuela_id=30;
        $plan->save();

        $plan = new \App\PlanEstudio();
        $plan->resolucion='N xxx Consejo Universitario';
        $plan->archivo='g';
        $plan->anio='2000';
        $plan->estado='1';
        $plan->escuela_id=31;
        $plan->save();
//cursos
        //cursos Inicial ciclo 1
        $curso = new \App\Curso();
        $curso->codigo='1101';
        $curso->nombre='Ortografía y sintaxis básica';
        $curso->ciclo=1;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1102';
        $curso->nombre='Lógica Matemática';
        $curso->ciclo=1;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1103';
        $curso->nombre='Tecnología de la información en el contexto del trabajo universitario';
        $curso->ciclo=1;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1104';
        $curso->nombre='Neurociencia del aprendizaje';
        $curso->ciclo=1;
        $curso->creditos=4;
        $curso->hteoria=3;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1105';
        $curso->nombre='Proceso histórico del Perú y del Mundo';
        $curso->ciclo=1;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->comp_ciudadania=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1106';
        $curso->nombre='Teorías y fundamentos de la Educación Inicial';
        $curso->ciclo=1;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1107';
        $curso->nombre='Liderazgo pedagógico y desarrollo emocional';
        $curso->ciclo=1;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1108';
        $curso->nombre='Animación y coreografía infantil';
        $curso->ciclo=1;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        //2 ciclo
        $curso = new \App\Curso();
        $curso->codigo='1201';
        $curso->nombre='Comprensión Lectora y Lexicología';
        $curso->ciclo=2;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1202';
        $curso->nombre='Matemática básica';
        $curso->ciclo=2;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1203';
        $curso->nombre='Ciencias Naturales y Geográficas para la Defensa Nacional';
        $curso->ciclo=2;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->comp_ciudadania=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1204';
        $curso->nombre='Introducción a la Filosofía';
        $curso->ciclo=2;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1205';
        $curso->nombre='Educación Ambiental';
        $curso->ciclo=2;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1206';
        $curso->nombre='Psicomotricidad y Juegos Infantiles';
        $curso->ciclo=2;
        $curso->creditos=4;
        $curso->hteoria=3;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1207';
        $curso->nombre='Expresión musical y canto';
        $curso->ciclo=2;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='1208';
        $curso->nombre='Danzas peruanas aplicadas a la Educación Inicial';
        $curso->ciclo=2;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        //ciclo 3
        $curso = new \App\Curso();
        $curso->codigo='2101';
        $curso->nombre='Redacción y Producción de Textos';
        $curso->ciclo=3;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2102';
        $curso->nombre='Ética y responsabilidad social';
        $curso->ciclo=3;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->comp_responsabilidad_soc=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2103';
        $curso->nombre='Psicología del Desarrollo y del Aprendizaje';
        $curso->ciclo=3;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2104';
        $curso->nombre='Educación y Ciencias Agógicas';
        $curso->ciclo=3;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2105';
        $curso->nombre='Atención y prevención de la Salud Infantil';
        $curso->ciclo=3;
        $curso->creditos=4;
        $curso->hteoria=3;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2106';
        $curso->nombre='Educación Musical';
        $curso->ciclo=3;
        $curso->creditos=4;
        $curso->hteoria=3;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2107';
        $curso->nombre='Juegos y rondas infantiles';
        $curso->ciclo=3;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2108';
        $curso->nombre='Teatro infantil';
        $curso->ciclo=3;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        //ciclo 4
        $curso = new \App\Curso();
        $curso->codigo='2201';
        $curso->nombre='Didáctica General';
        $curso->ciclo=4;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2202';
        $curso->nombre='Diseño y Programación Curricular';
        $curso->ciclo=4;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2203';
        $curso->nombre='Proyectos Educativos';
        $curso->ciclo=4;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2204';
        $curso->nombre='Educación para la convivencia y la paz';
        $curso->ciclo=4;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2205';
        $curso->nombre='Psicología del Desarrollo Infantil';
        $curso->ciclo=4;
        $curso->creditos=4;
        $curso->hteoria=3;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2206';
        $curso->nombre='Nutrición Infantil';
        $curso->ciclo=4;
        $curso->creditos=3;
        $curso->hteoria=1;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2207';
        $curso->nombre='Dibujo y pintura';
        $curso->ciclo=4;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='2208';
        $curso->nombre='Marketing de eventos culturales';
        $curso->ciclo=4;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        //ciclo 5
        $curso = new \App\Curso();
        $curso->codigo='3101';
        $curso->nombre='Metodología de la Investigación Científica';
        $curso->ciclo=5;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->comp_investigacion=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3102';
        $curso->nombre='Gestión y legislación educativa';
        $curso->ciclo=5;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3103';
        $curso->nombre='Didáctica en Educación Inicial I';
        $curso->ciclo=5;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3104';
        $curso->nombre='Gestión Curricular para el I Ciclo';
        $curso->ciclo=5;
        $curso->creditos=5;
        $curso->hteoria=4;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3105';
        $curso->nombre='Práctica Pre Profesional I';
        $curso->ciclo=5;
        $curso->creditos=2;
        $curso->hteoria=1;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->comp_experiencia_pre_prof=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3106';
        $curso->nombre='Educación Temprana I';
        $curso->ciclo=5;
        $curso->creditos=4;
        $curso->hteoria=3;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3107';
        $curso->nombre='Idioma extranjero';
        $curso->ciclo=5;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3108';
        $curso->nombre='Gestión y administración de PYMES';
        $curso->ciclo=5;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        //ciclo 6
        $curso = new \App\Curso();
        $curso->codigo='3201';
        $curso->nombre='Análisis de la Realidad nacional y Mundial';
        $curso->ciclo=6;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->comp_ciudadania=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3202';
        $curso->nombre='Formulación de Proyectos de Investigación Educativa';
        $curso->ciclo=6;
        $curso->creditos=4;
        $curso->hteoria=3;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->comp_investigacion=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3203';
        $curso->nombre='Didáctica en Educación Inicial II';
        $curso->ciclo=6;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3204';
        $curso->nombre='Gestión Curricular para el II Ciclo';
        $curso->ciclo=6;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3205';
        $curso->nombre='Práctica Pre Profesional II';
        $curso->ciclo=6;
        $curso->creditos=2;
        $curso->hteoria=1;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->comp_experiencia_pre_prof=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3206';
        $curso->nombre='Educación Temprana II';
        $curso->ciclo=6;
        $curso->creditos=4;
        $curso->hteoria=3;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3207';
        $curso->nombre='Gestión de servicios de atención infantil';
        $curso->ciclo=6;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='3208';
        $curso->nombre='Liderazgo pedagógico y Desarrollo Emocional';
        $curso->ciclo=6;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->es_electivo=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        //ciclo 7
        $curso = new \App\Curso();
        $curso->codigo='4101';
        $curso->nombre='Estadística Descriptiva e Inferencial aplicada a la Educación';
        $curso->ciclo=7;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_general=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4102';
        $curso->nombre='Neurociencia en el Desarrollo de la Primera Infancia';
        $curso->ciclo=7;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4103';
        $curso->nombre='Taller de Elaboración de Material Didáctico';
        $curso->ciclo=7;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4104';
        $curso->nombre='Iniciación al Pensamiento Lógico Matemático';
        $curso->ciclo=7;
        $curso->creditos=3;
        $curso->hteoria=1;
        $curso->hpractica=4;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4105';
        $curso->nombre='Práctica Pre Profesional III';
        $curso->ciclo=7;
        $curso->creditos=2;
        $curso->hteoria=1;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->comp_experiencia_pre_prof=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4106';
        $curso->nombre='Expresión Dramática y Títeres';
        $curso->ciclo=7;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();


        //ciclo 8
        $curso = new \App\Curso();
        $curso->codigo='4201';
        $curso->nombre='Creatividad y Expresión Grafico Plástica';
        $curso->ciclo=8;
        $curso->creditos=3;
        $curso->hteoria=1;
        $curso->hpractica=4;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4202';
        $curso->nombre='Desarrollo de la Comunicación Oral y Escrita';
        $curso->ciclo=8;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4203';
        $curso->nombre='Desarrollo del Pensamiento Científico y Conciencia Ecológica en la Infancia';
        $curso->ciclo=8;
        $curso->creditos=3;
        $curso->hteoria=1;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4204';
        $curso->nombre='Evaluación Educacional: medición y calidad educativa';
        $curso->ciclo=8;
        $curso->creditos=3;
        $curso->hteoria=1;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4205';
        $curso->nombre='Práctica Pre Profesional IV';
        $curso->ciclo=8;
        $curso->creditos=2;
        $curso->hteoria=1;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->comp_experiencia_pre_prof=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='4206';
        $curso->nombre='Literatura Infantil';
        $curso->ciclo=8;
        $curso->creditos=3;
        $curso->hteoria=1;
        $curso->hpractica=4;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        //ciclo 9
        $curso = new \App\Curso();
        $curso->codigo='5101';
        $curso->nombre='Tesis I';
        $curso->ciclo=9;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=4;
        $curso->es_general=1;
        $curso->comp_investigacion=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='5102';
        $curso->nombre='Orientación Familiar y Comunal';
        $curso->ciclo=9;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='5103';
        $curso->nombre='Gestión y Administración de Instituciones Educativas y Programas Infantiles';
        $curso->ciclo=9;
        $curso->creditos=4;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='5104';
        $curso->nombre='Práctica Pre Profesional V';
        $curso->ciclo=9;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->comp_experiencia_pre_prof=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='5105';
        $curso->nombre='Tratamiento Pedagógico de los Proble- mas de Desarrollo del Niño';
        $curso->ciclo=9;
        $curso->creditos=3;
        $curso->hteoria=1;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        //ciclo 10
        $curso = new \App\Curso();
        $curso->codigo='5201';
        $curso->nombre='Tesis II';
        $curso->ciclo=10;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_general=1;
        $curso->comp_investigacion=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='5202';
        $curso->nombre='Seguridad Ciudadana y Defensa Civil';
        $curso->ciclo=10;
        $curso->creditos=2;
        $curso->hteoria=0;
        $curso->hpractica=4;
        $curso->es_especifico=1;
        $curso->comp_ciudadania=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='5203';
        $curso->nombre='Informática Aplicada a la Educación Inicial';
        $curso->ciclo=10;
        $curso->creditos=4;
        $curso->hteoria=3;
        $curso->hpractica=2;
        $curso->es_especialidad=1;
        $curso->plan_estudio_id=1;
        $curso->save();

        $curso = new \App\Curso();
        $curso->codigo='5204';
        $curso->nombre='Práctica Pre Profesional VI';
        $curso->ciclo=10;
        $curso->creditos=3;
        $curso->hteoria=2;
        $curso->hpractica=2;
        $curso->es_especifico=1;
        $curso->comp_experiencia_pre_prof=1;
        $curso->plan_estudio_id=1;
        $curso->save();

//Carga Lectiva
        //carga lectiva 1 del curso 1 Ortografía y sintaxis básica docente Abelardo
        $carga = new \App\CargaLectiva();
        $carga->semestre='I';
        $carga->anio=2018;
        $carga->curso_id=1;
        $carga->docente_id=26;
        $carga->save();

        //carga lectiva 2 del curso 2 Ortografía y sintaxis básica docente Raul Jorge
        $carga = new \App\CargaLectiva();
        $carga->semestre='I';
        $carga->anio=2018;
        $carga->curso_id=2;
        $carga->docente_id=27;
        $carga->save();

        //carga lectiva 3 del curso 3 Ortografía y sintaxis básica docente Fidel
        $carga = new \App\CargaLectiva();
        $carga->semestre='I';
        $carga->anio=2018;
        $carga->curso_id=3;
        $carga->docente_id=28;
        $carga->save();

//pabellones de la UNHEVAL
        //pabellon 1 de educación
        $pabellon = new \App\Pabellon();
        $pabellon->pabellon='1';
        $pabellon->descripcion='Pabellon de Educación';
        $pabellon->save();

        //pabellon 2 de enfermeria
        $pabellon = new \App\Pabellon();
        $pabellon->pabellon='2';
        $pabellon->descripcion='Pabellon de Enfermería';
        $pabellon->save();

        //pabellon 3 de Ingenieria Industrial y de sistemas
        $pabellon = new \App\Pabellon();
        $pabellon->pabellon='4';
        $pabellon->descripcion='Pabellon de Ingenieria Industrial y de Sistemas';
        $pabellon->save();


//ambientes de la UNHEVAL
        //ambiente 1 aula de Facultad de Educación
        $ambiente = new \App\Ambiente();
        $ambiente->ambiente='Aula 504';
        $ambiente->descripcion='Aula de clases de 5to año';
        $ambiente->capacidad=40;
        $ambiente->dependencia_id=11;
        $ambiente->tipo_ambiente_id=1;
        $ambiente->pabellon_id=1;
        $ambiente->es_aula=1;
        $ambiente->save();

        //ambiente 2 aula de Facultad de Educación
        $ambiente = new \App\Ambiente();
        $ambiente->ambiente='Aula 304';
        $ambiente->descripcion='Aula de clases de 2do año';
        $ambiente->capacidad=40;
        $ambiente->dependencia_id=11;
        $ambiente->tipo_ambiente_id=1;
        $ambiente->pabellon_id=1;
        $ambiente->es_aula=1;
        $ambiente->save();

        //ambiente 3 laboratorio de Facultad de Educación
        $ambiente = new \App\Ambiente();
        $ambiente->ambiente='Laboratorio de Lengua';
        $ambiente->descripcion='Laborartorio de canto y percución';
        $ambiente->capacidad=20;
        $ambiente->dependencia_id=11;
        $ambiente->tipo_ambiente_id=3;
        $ambiente->pabellon_id=1;
        $ambiente->es_laboratorio=1;
        $ambiente->save();

        //ambiente 4 taller de Facultad de Educación
        $ambiente = new \App\Ambiente();
        $ambiente->ambiente='Taller de Musica';
        $ambiente->descripcion='Se realiza practicas con instrumentos musicales';
        $ambiente->capacidad=20;
        $ambiente->dependencia_id=11;
        $ambiente->tipo_ambiente_id=2;
        $ambiente->pabellon_id=1;
        $ambiente->es_taller=1;
        $ambiente->save();

        //ambiente 5 taller de Facultad de Enfermeria
        $ambiente = new \App\Ambiente();
        $ambiente->ambiente='Aula 303';
        $ambiente->descripcion='Aula de estudios';
        $ambiente->capacidad=60;
        $ambiente->dependencia_id=5;
        $ambiente->tipo_ambiente_id=1;
        $ambiente->pabellon_id=2;
        $ambiente->es_aula=1;
        $ambiente->save();

        //ambiente 6 taller de Facultad de Enfermeria
        $ambiente = new \App\Ambiente();
        $ambiente->ambiente='Laboratorio de Clinico';
        $ambiente->descripcion='AAAAAAAA';
        $ambiente->capacidad=30;
        $ambiente->dependencia_id=5;
        $ambiente->tipo_ambiente_id=2;
        $ambiente->pabellon_id=2;
        $ambiente->es_laboratorio=1;
        $ambiente->save();

//horarios
        //horario 1 de la carga lectiva 1
        $horario = new \App\Horario();
        $horario->hora_inicio='09:00:00';
        $horario->hora_fin='11:00:00';
        $horario->dia=1;
        $horario->carga_lectiva_id=1;
        $horario->ambiente_id=1;
        $horario->save();

        //horario 2 de la carga lectiva 1
        $horario = new \App\Horario();
        $horario->hora_inicio='09:00:00';
        $horario->hora_fin='11:00:00';
        $horario->dia=3;
        $horario->carga_lectiva_id=1;
        $horario->ambiente_id=1;
        $horario->save();

        //horario 3 de la carga lectiva 2
        $horario = new \App\Horario();
        $horario->hora_inicio='09:00:00';
        $horario->hora_fin='11:00:00';
        $horario->dia=1;
        $horario->carga_lectiva_id=2;
        $horario->ambiente_id=2;
        $horario->save();

        //horario 4 de la carga lectiva 2
        $horario = new \App\Horario();
        $horario->hora_inicio='09:00:00';
        $horario->hora_fin='11:00:00';
        $horario->dia=3;
        $horario->carga_lectiva_id=2;
        $horario->ambiente_id=2;
        $horario->save();

        //horario 5 de la curso de ingles basico 1
        $horario = new \App\Horario();
        $horario->hora_inicio='09:00:00';
        $horario->hora_fin='11:00:00';
        $horario->dia=1;
        $horario->curso_ncgt_disponible_id=4;
        $horario->ambiente_id=1;
        $horario->save();

        //horario 6 de curso de ingles basico 1
        $horario = new \App\Horario();
        $horario->hora_inicio='09:00:00';
        $horario->hora_fin='11:00:00';
        $horario->dia=3;
        $horario->curso_ncgt_disponible_id=4;
        $horario->ambiente_id=1;
        $horario->save();

        //horario 7 de la curso de ingles basico 2
        $horario = new \App\Horario();
        $horario->hora_inicio='09:00:00';
        $horario->hora_fin='11:00:00';
        $horario->dia=2;
        $horario->curso_ncgt_disponible_id=5;
        $horario->ambiente_id=1;
        $horario->save();

        //horario 8 de curso de ingles basico 2
        $horario = new \App\Horario();
        $horario->hora_inicio='09:00:00';
        $horario->hora_fin='11:00:00';
        $horario->dia=4;
        $horario->curso_ncgt_disponible_id=5;
        $horario->ambiente_id=1;
        $horario->save();

//actividades de silabos
        //Actividades 1  del horario 1 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 1';
        $actividad->semana=1;
        $actividad->horario_id=1;
        $actividad->save();

        //Actividades 2  del horario 1 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 2';
        $actividad->semana=1;
        $actividad->horario_id=1;
        $actividad->save();

        //Actividades 3  del horario 2 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 3';
        $actividad->semana=1;
        $actividad->horario_id=2;
        $actividad->save();

        //Actividades 4  del horario 1 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 4';
        $actividad->semana=2;
        $actividad->horario_id=1;
        $actividad->save();

        //Actividades 5  del horario 2 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 5';
        $actividad->semana=2;
        $actividad->horario_id=2;
        $actividad->save();

        //Actividades 6  del horario 1 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 6';
        $actividad->semana=3;
        $actividad->horario_id=1;
        $actividad->save();

        //Actividades 7  del horario 2 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 7';
        $actividad->semana=3;
        $actividad->horario_id=2;
        $actividad->save();

        //Actividades 8  del horario 1 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 8';
        $actividad->semana=4;
        $actividad->horario_id=1;
        $actividad->save();

        //Actividades 9  del horario 2 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 9';
        $actividad->semana=4;
        $actividad->horario_id=2;
        $actividad->save();

        //Actividades 10  del horario 1 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 10';
        $actividad->semana=5;
        $actividad->horario_id=1;
        $actividad->save();

        //Actividades 11  del horario 2 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 11';
        $actividad->semana=5;
        $actividad->horario_id=2;
        $actividad->save();

        //Actividades 12  del horario 1 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 12';
        $actividad->semana=6;
        $actividad->horario_id=1;
        $actividad->save();

        //Actividades 13  del horario 2 que pertenece a la carga lectiva 1
        $actividad = new \App\ActividadSilabo();
        $actividad->actividad='Actividad 13';
        $actividad->semana=6;
        $actividad->horario_id=2;
        $actividad->save();




    }
}
