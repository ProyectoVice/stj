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



    }
}
