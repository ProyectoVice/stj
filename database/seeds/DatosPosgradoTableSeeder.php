<?php

use Illuminate\Database\Seeder;

class DatosPosgradoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // maestria areas
        DB::table('maestria_areas')->insert([
                ['maestria_area' => 'Educacion',],
                ['maestria_area' => 'Gestion y Administracion',],
                ['maestria_area' => 'Salud',],
                ['maestria_area' => 'Contable y Finanzas',],
                ['maestria_area' => 'Social',],
                ['maestria_area' => 'Ingenieria',],
                ['maestria_area' => 'Medio Ambiente y Desarrollo Sostenible',],
                ['maestria_area' => 'Derecho',]                
            ]);


//Programa de Estudios Posgrado
        //maestrias
        //1
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Educación con mención en Gestión y Planeamiento Educativo';
        $porgrama->maestria_area_id=1;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //2
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Educación con mención en Investigación y Docencia Superior';
        $porgrama->maestria_area_id=1;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //3
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Educación con mención en Investigación e Innovación Pedagógica';
        $porgrama->maestria_area_id=1;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //4
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Gerencia Pública';
        $porgrama->maestria_area_id=2;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //5
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Gestión y Negocios con mención en Gestión de Proyectos';
        $porgrama->maestria_area_id=2;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //6
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Gestión Empresarial';
        $porgrama->maestria_area_id=2;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //7
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Salud Pública y Gestión Sanitaria';
        $porgrama->maestria_area_id=3;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //8
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Administración y Gerencia en Salud';
        $porgrama->maestria_area_id=3;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //9
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Psicología';
        $porgrama->maestria_area_id=3;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //10
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Ciencias Veterinarias';
        $porgrama->maestria_area_id=3;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //11
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Ciencias Veterinarias';
        $porgrama->maestria_area_id=4;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //12
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Contabilidad con mención en Auditoría';
        $porgrama->maestria_area_id=4;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //13
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Tributación y Política Fiscal';
        $porgrama->maestria_area_id=4;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //14
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Comunicación para el Desarrollo';
        $porgrama->maestria_area_id=5;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //15
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Sistema de Protección de los Derechos del Niño, Niña y Adolescente frente a la Violencia';
        $porgrama->maestria_area_id=5;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //16
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Sociología con mención en Gerencia Social';
        $porgrama->maestria_area_id=5;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //17
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Diseño y Construcción de Obras Viales';
        $porgrama->maestria_area_id=6;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //18
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Ingeniería de Sistemas con mención en Tecnologías de la Información y Comunicación';
        $porgrama->maestria_area_id=6;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //19
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Medio Ambiente y Desarrollo Sostenible con mención en Gestión Ambiental';
        $porgrama->maestria_area_id=7;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //20
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Derecho con mención en Ciencias Penales';
        $porgrama->maestria_area_id=8;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //21
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Maestría en Derecho con mención en Civil y Comercial';
        $porgrama->maestria_area_id=8;
        $porgrama->es_maestria=1;
        $porgrama->save();
        //doctorados
        //22
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Doctorado en Ciencias de la Educación';
        $porgrama->es_doctorado=1;
        $porgrama->save();
        //23
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Doctorado en Gestión Empresarial';
        $porgrama->es_doctorado=1;
        $porgrama->save();
        //24
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Doctorado en Ciencias de la Salud';
        $porgrama->es_doctorado=1;
        $porgrama->save();
        //25
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Doctorado en Derecho';
        $porgrama->es_doctorado=1;
        $porgrama->save();
        //26
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Doctorado en Contabilidad';
        $porgrama->es_doctorado=1;
        $porgrama->save();
        //27
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Doctorado en Ciencias Económicas y Sociales';
        $porgrama->es_doctorado=1;
        $porgrama->save();
        //28
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Doctorado en Administración';
        $porgrama->es_doctorado=1;
        $porgrama->save();
        //29
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Doctorado en Medicina Veterinaria';
        $porgrama->es_doctorado=1;
        $porgrama->save();
        //30
        $porgrama = new \App\ProgramaEstudioPosgrado();
        $porgrama->programa_estudio_posgrado='Doctorado en Medio Ambiente y Desarrollo Sostenible';
        $porgrama->es_doctorado=1;
        $porgrama->save();
    }
}
