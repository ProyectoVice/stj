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
        // mestrias
        DB::table('maestrias')->insert([
                
                ['maestria' => 'Maestría en Educación con mención en Gestión y Planeamiento Educativo', 'maestria_area_id' => '1',],
                ['maestria' => 'Maestría en Educación con mención en Investigación y Docencia Superior', 'maestria_area_id' => '1',],
                ['maestria' => 'Maestría en Educación con mención en Investigación e Innovación Pedagógica', 'maestria_area_id' => '1',],
                ['maestria' => 'Maestría en Gerencia Pública', 'maestria_area_id' => '2',],
                ['maestria' => 'Maestría en Gestión y Negocios con mención en Gestión de Proyectos', 'maestria_area_id' => '2',],
                ['maestria' => 'Maestría en Gestión Empresarial', 'maestria_area_id' => '2',],
                ['maestria' => 'Maestría en Salud Pública y Gestión Sanitaria', 'maestria_area_id' => '3',],
                ['maestria' => 'Maestría en Administración y Gerencia en Salud', 'maestria_area_id' => '3',],
                ['maestria' => 'Maestría en Psicología', 'maestria_area_id' => '3',],
                ['maestria' => 'Maestría en Ciencias Veterinarias', 'maestria_area_id' => '3',],
                ['maestria' => 'Maestría en Banca y Finanzas', 'maestria_area_id' => '4',],
                ['maestria' => 'Maestría en Contabilidad con mención en Auditoría', 'maestria_area_id' => '4',],
                ['maestria' => 'Maestría en Tributación y Política Fiscal', 'maestria_area_id' => '4',],
                ['maestria' => 'Maestría en Comunicación para el Desarrollo', 'maestria_area_id' => '5',],
                ['maestria' => 'Maestría en Sistema de Protección de los Derechos del Niño, Niña y Adolescente frente a la Violencia', 'maestria_area_id' => '5',],
                ['maestria' => 'Maestría en Sociología con mención en Gerencia Social', 'maestria_area_id' => '5',],
                ['maestria' => 'Maestría en Diseño y Construcción de Obras Viales', 'maestria_area_id' => '6',],
                ['maestria' => 'Maestría en Ingeniería de Sistemas con mención en Tecnologías de la Información y Comunicación', 'maestria_area_id' => '6',],
                ['maestria' => 'Maestría en Medio Ambiente y Desarrollo Sostenible con mención en Gestión Ambiental', 'maestria_area_id' => '7',],
                ['maestria' => 'Maestría en Derecho con mención en Ciencias Penales', 'maestria_area_id' => '8',],               
                ['maestria' => 'Maestría en Derecho con mención en Civil y Comercial', 'maestria_area_id' => '8',]                
            ]);
        // doctorado
        DB::table('doctorados')->insert([
                ['doctorado' => 'Doctorado en Ciencias de la Educación',],
                ['doctorado' => 'Doctorado en Gestión Empresarial',],
                ['doctorado' => 'Doctorado en Ciencias de la Salud',],
                ['doctorado' => 'Doctorado en Derecho',],
                ['doctorado' => 'Doctorado en Contabilidad',],
                ['doctorado' => 'Doctorado en Ciencias Económicas y Sociales',],
                ['doctorado' => 'Doctorado en Administración',],
                ['doctorado' => 'Doctorado en Medicina Veterinaria',],                
                ['doctorado' => 'Doctorado en Medio Ambiente y Desarrollo Sostenible',]                
            ]);
    }
}
