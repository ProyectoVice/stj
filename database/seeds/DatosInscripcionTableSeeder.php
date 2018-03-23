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
        
        //eadyfc_horario_tipo
        DB::table('idioma_tipos')->insert([
                ['idioma_tipo' => 'Pregrado',],                                
                ['idioma_tipo' => 'Posgrado',],
                ['idioma_tipo' => 'No aplica',]                
            ]);
         //inscripcion_nivel
        DB::table('inscripcion_nivels')->insert([
                ['inscripcion_nivel' => 'Basico',],
                ['inscripcion_nivel' => 'Intermedio',],                                 
                ['inscripcion_nivel' => 'Avanzado',]                
            ]);
        //inscripcion_modulo
        DB::table('inscripcion_modulos')->insert([
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
                ['inscripcion_modulo' => 'DESARROLLO DE VIDEOJUEGOS',],                                   
                ['inscripcion_modulo' => 'NO APLICA',]                
            ]);
        //inscripcion_curso
        DB::table('inscripcion_cursos')->insert([
                ['inscripcion_curso' => 'TIC´S', 'inscripcion_modulo_id' => '1',],
                ['inscripcion_curso' => 'Word', 'inscripcion_modulo_id' => '1',],
                ['inscripcion_curso' => 'Excel', 'inscripcion_modulo_id' => '1',],
                ['inscripcion_curso' => 'Power Point', 'inscripcion_modulo_id' => '1',],
                ['inscripcion_curso' => 'Corel Draw', 'inscripcion_modulo_id' => '2',],
                ['inscripcion_curso' => 'Adobe Photoshop', 'inscripcion_modulo_id' => '2',],
                ['inscripcion_curso' => 'Adobe  Indesing', 'inscripcion_modulo_id' => '2',],
                ['inscripcion_curso' => 'Adobe Muse', 'inscripcion_modulo_id' => '2',],
                ['inscripcion_curso' => 'Excel Profesional', 'inscripcion_modulo_id' => '3',],
                ['inscripcion_curso' => 'Excel y Visual Basic', 'inscripcion_modulo_id' => '3',],
                ['inscripcion_curso' => 'Acces', 'inscripcion_modulo_id' => '3',],
                ['inscripcion_curso' => 'MS Project', 'inscripcion_modulo_id' => '3',],
                ['inscripcion_curso' => 'HTML y CSS', 'inscripcion_modulo_id' => '4',],
                ['inscripcion_curso' => 'Bootstrap', 'inscripcion_modulo_id' => '4',],
                ['inscripcion_curso' => 'Adobe Animate', 'inscripcion_modulo_id' => '4',],
                ['inscripcion_curso' => 'Java Script Y Jquery', 'inscripcion_modulo_id' => '4',],
                ['inscripcion_curso' => 'Sony Vegas', 'inscripcion_modulo_id' => '5',],
                ['inscripcion_curso' => 'Adobe Premier', 'inscripcion_modulo_id' => '5',],
                ['inscripcion_curso' => 'Adobe After Effects', 'inscripcion_modulo_id' => '5',],
                ['inscripcion_curso' => 'Taller Multimedia', 'inscripcion_modulo_id' => '5',],
                ['inscripcion_curso' => 'Ensamblajes de Pc´s', 'inscripcion_modulo_id' => '6',],
                ['inscripcion_curso' => 'Mantenimiento de Pc´s', 'inscripcion_modulo_id' => '6',],
                ['inscripcion_curso' => 'Software de Utilitarios', 'inscripcion_modulo_id' => '6',],
                ['inscripcion_curso' => 'Diagnóstico y Reparación de Pc´s', 'inscripcion_modulo_id' => '6',],
                ['inscripcion_curso' => 'AUTOCAD Básico', 'inscripcion_modulo_id' => '7',],
                ['inscripcion_curso' => 'AUTOCAD Intermedio', 'inscripcion_modulo_id' => '7',],
                ['inscripcion_curso' => 'AUTOCAD Avanzado', 'inscripcion_modulo_id' => '7',],
                ['inscripcion_curso' => '3D STUDIO MAX', 'inscripcion_modulo_id' => '7',],
                ['inscripcion_curso' => 'Fundamentos de Programación', 'inscripcion_modulo_id' => '8',],
                ['inscripcion_curso' => 'Aplicaciones de Escritorio', 'inscripcion_modulo_id' => '8',],
                ['inscripcion_curso' => 'Aplicaciones Web', 'inscripcion_modulo_id' => '8',],
                ['inscripcion_curso' => 'Gestión de Base de Datos con MYSQL', 'inscripcion_modulo_id' => '8',],
                ['inscripcion_curso' => 'SCRATCH Básico', 'inscripcion_modulo_id' => '9',],
                ['inscripcion_curso' => 'SCRATCH Avanzado', 'inscripcion_modulo_id' => '9',],
                ['inscripcion_curso' => 'KODU GAME LAB Básico', 'inscripcion_modulo_id' => '9',],
                ['inscripcion_curso' => 'KODU GAME LAB Avanzado', 'inscripcion_modulo_id' => '9',],
                ['inscripcion_curso' => 'Programación Mblock', 'inscripcion_modulo_id' => '10',],
                ['inscripcion_curso' => 'Sensortes de ARDUINO', 'inscripcion_modulo_id' => '10',],
                ['inscripcion_curso' => 'Robótica con ARDUINO', 'inscripcion_modulo_id' => '10',],
                ['inscripcion_curso' => 'Proyecto Robot con ARDUINO', 'inscripcion_modulo_id' => '10',],
                ['inscripcion_curso' => 'Fundamentos de Programación con PHP', 'inscripcion_modulo_id' => '11',],
                ['inscripcion_curso' => 'Gestión de Base de Datos con MYSQL', 'inscripcion_modulo_id' => '11',],
                ['inscripcion_curso' => 'Sistema Web con PHP y MYSQL', 'inscripcion_modulo_id' => '11',],
                ['inscripcion_curso' => 'Proyecto de Sistema Web', 'inscripcion_modulo_id' => '11',],
                ['inscripcion_curso' => 'Cinema 4D Básico', 'inscripcion_modulo_id' => '12',],
                ['inscripcion_curso' => 'Cinema 4D Avanzado', 'inscripcion_modulo_id' => '12',],
                ['inscripcion_curso' => '3D Studio Max Básico', 'inscripcion_modulo_id' => '12',],
                ['inscripcion_curso' => '3D Studio Max Avanzado', 'inscripcion_modulo_id' => '12',],
                ['inscripcion_curso' => 'Conectividad y Cableado Estructurado', 'inscripcion_modulo_id' => '13',],
                ['inscripcion_curso' => 'Redes Inalambricas y Antenas', 'inscripcion_modulo_id' => '13',],
                ['inscripcion_curso' => 'Instalación y Virtalización de Servidores', 'inscripcion_modulo_id' => '13',],
                ['inscripcion_curso' => 'Administración de Red', 'inscripcion_modulo_id' => '13',],
                ['inscripcion_curso' => 'ARCHICAD Básico', 'inscripcion_modulo_id' => '14',],
                ['inscripcion_curso' => 'ARCHICAD Intermedio', 'inscripcion_modulo_id' => '14',],
                ['inscripcion_curso' => 'ARCHICAD Avanzado', 'inscripcion_modulo_id' => '14',],
                ['inscripcion_curso' => 'Integración con 3D Stuio Max', 'inscripcion_modulo_id' => '14',],
                ['inscripcion_curso' => 'App Inventor', 'inscripcion_modulo_id' => '15',],
                ['inscripcion_curso' => 'Android Básico', 'inscripcion_modulo_id' => '15',],
                ['inscripcion_curso' => 'Android Avanzado', 'inscripcion_modulo_id' => '15',],
                ['inscripcion_curso' => 'Proyecto Aplicación Móvil', 'inscripcion_modulo_id' => '15',],
                ['inscripcion_curso' => 'Unreal Development kit Básico', 'inscripcion_modulo_id' => '16',],
                ['inscripcion_curso' => 'Unreal Development kit Avanzado', 'inscripcion_modulo_id' => '16',],
                ['inscripcion_curso' => 'Unity Básico', 'inscripcion_modulo_id' => '16',],
                ['inscripcion_curso' => 'Unity Avanzado', 'inscripcion_modulo_id' => '16',],
                ['inscripcion_curso' => 'Ingles', 'inscripcion_modulo_id' => '17',],
                ['inscripcion_curso' => 'Quechua', 'inscripcion_modulo_id' => '17',],
                ['inscripcion_curso' => 'Portugues', 'inscripcion_modulo_id' => '17',],
                ['inscripcion_curso' => 'Italiano', 'inscripcion_modulo_id' => '17',],
                ['inscripcion_curso' => 'Frances', 'inscripcion_modulo_id' => '17',]               
            ]);
        //docentes_otros

      /*  DB::table('docentes_otros')->insert([
                ['user_id' => '1', 'fecha_ingreso' => '12/12/2010', 'carga' => '20',],                
                ['user_id' => '2', 'fecha_ingreso' => '12/12/2009', 'carga' => '30',]             
            ]);
        //inscripcion turno
        DB::table('inscripcion_curso_disponibles')->insert([
                
                ['ciclo' => '1', 'grupo' => '1', 'inscripcion_curso_id' => '1', 'user_id' => '4', 'inscripcion_nivel_id'=> '1', 'idioma_tipo_id'=> '1',],                               
                ['ciclo' => '2', 'grupo' => '2', 'inscripcion_curso_id' => '1', 'user_id' => '5', 'inscripcion_nivel_id'=> '1', 'idioma_tipo_id'=> '1',]                
            ]);*/     
                    
    }
}
