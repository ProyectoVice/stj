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
        
        //dependencias
        DB::table('dependencias')->insert([

                //Facultades
                ['dependencia' => 'Vicerrectorado Academico', 'es_facultad'=>'0', 'es_escuela'=>'0', 'dependencia_id'=> '0',],
                //Facultades
                ['dependencia' => 'Facultad de Ciencias Agrarias', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Medicina', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Psicología', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Enfermería', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Obstetricia', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Ciencias Administrativas y Turismo', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Ciencias Contables y Financieras', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Economía', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Ciencias Sociales', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Ciencias de la Educación', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Derecho y Ciencias Políticas', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Ingeniería Civil y Arquitectura', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Ingeniería Industrial y de Sistemas', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                ['dependencia' => 'Facultad de Medicina Veterinaria y Zootecnia', 'es_facultad'=>'1', 'es_escuela'=>'0', 'dependencia_id'=> '1',],
                //Escuelas
                ['dependencia' => 'Escuela Profesional INGENIERIA AGRONOMICA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '2',],
                ['dependencia' => 'Escuela Profesional INGENIERIA AGROINDUSTRIAL', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '2',],
                ['dependencia' => 'Escuela Profesional INGENIERIA AGROPECUARIA FORESTAL', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '2',],   
                ['dependencia' => 'Escuela Profesional MEDICINA HUMANA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '3',],   
                ['dependencia' => 'Escuela Profesional ODONTOLOGIA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '3',],   
                ['dependencia' => 'Escuela Profesional PSICOLOGIA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '4',],   
                ['dependencia' => 'Escuela Profesional ENFERMERIA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '5',],   
                ['dependencia' => 'Escuela Profesional OBSTETRICIA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '6',],   
                ['dependencia' => 'Escuela Profesional CIENCIAS ADMINISTRATIVAS', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '7',],
                ['dependencia' => 'Escuela Profesional TURISMO Y HOTELERIA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '7',],
                ['dependencia' => 'Escuela Profesional CIENCIAS CONTABLES Y FINANCIERAS', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '8',],   
                ['dependencia' => 'Escuela Profesional ECONOMIA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '9',],   
                ['dependencia' => 'Escuela Profesional SOCIOLOGIA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '10',],   
                ['dependencia' => 'Escuela Profesional CIENCIAS DE LA COMUNICACION SOCIAL', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '10',],   
                ['dependencia' => 'Escuela Profesional EDUCACION INICIAL', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '11',],   
                ['dependencia' => 'Escuela Profesional EDUCACION PRIMARIA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '11',],   
                ['dependencia' => 'Escuela Profesional EDUCACION FISICA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '11',],
                ['dependencia' => 'Escuela Profesional FILOSOFIA, PSICOLOGIA Y CIENCIAS SOCIALES', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '11',],
                ['dependencia' => 'Escuela Profesional LENGUA Y LITERATURA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '11',],   
                ['dependencia' => 'Escuela Profesional CIENCIAS HISTORICO SOCIALES Y GEOGRAFICAS', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '11',],   
                ['dependencia' => 'Escuela Profesional MATEMATICA Y FISICA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '11',],   
                ['dependencia' => 'Escuela Profesional BIOLOGIA, QUIMICA Y CIENCIA DEL AMBIENTE', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '11',],   
                ['dependencia' => 'Escuela Profesional DERECHO Y CIENCIAS POLITICAS', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '12',],   
                ['dependencia' => 'Escuela Profesional INGENIERIA CIVIL', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '13',],   
                ['dependencia' => 'Escuela Profesional ARQUITECTURA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '13',],
                ['dependencia' => 'Escuela Profesional INGENIERIA INDUSTRIAL', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '14',],
                ['dependencia' => 'Escuela Profesional INGENIERIA DE SISTEMAS', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '14',],
                ['dependencia' => 'Escuela Profesional MEDICINA VETERINARIA', 'es_facultad'=>'0', 'es_escuela'=>'1', 'dependencia_id'=> '15',],  
                ['dependencia' => 'Escuela de Posgrado', 'es_facultad'=>'0', 'es_posgrado'=>'1', 'dependencia_id'=> '1',],
                ['dependencia' => 'PROCAPT', 'es_facultad'=>'0', 'es_oficina'=>'1', 'dependencia_id'=> '1',]
            ]);
        //tarifarios
        DB::table('tarifarios')->insert([
                ['descripcion' => 'Carrera Profesional de Medicina Humana -Nacional', 'monto'=>'350', 'es_modalidades'=>'1', 'es_modalidad_publico'=>'1',],
                ['descripcion' => 'Carrera Profesional de Medicina Humana -Particular', 'monto'=>'400', 'es_modalidades'=>'1', 'es_modalidad_particular'=>'1',],
                ['descripcion' => 'Otras Carreras Profesionales - Nacional', 'monto'=>'280', 'es_modalidades'=>'1', 'es_modalidad_publico'=>'1',],
                ['descripcion' => 'Otras Carreras Profesionales - Particular', 'monto'=>'330', 'es_modalidades'=>'1', 'es_modalidad_particular'=>'1',],
                ['descripcion' => 'Postulantes libres', 'monto'=>'100', 'es_modalidades'=>'0', 'es_libre'=>'1',],
                ['descripcion' => 'Primeros puestos de Educación Secundaria y Educación Básica Alternativa-Nacional', 'monto'=>'300', 'es_modalidades'=>'1', 'es_modalidad_publico'=>'1',],
                ['descripcion' => 'Primeros puestos de Educación Secundaria y Educación Básica Alternativa-Particular', 'monto'=>'400', 'es_modalidades'=>'1', 'es_modalidad_particular'=>'1',],
                ['descripcion' => 'Traslado externo Nacional e Internacional - Univ. Publica', 'monto'=>'500', 'es_modalidades'=>'1', 'es_modalidad_publico'=>'1',],
                ['descripcion' => 'Traslado externo Nacional e Internacional - Univ. Privada', 'monto'=>'800', 'es_modalidades'=>'1', 'es_modalidad_particular'=>'1',],
                ['descripcion' => 'Traslado externo Nacional e Internacional - Univ. Extranjeras', 'monto'=>'1000', 'es_modalidades'=>'1', 'es_libre'=>'0',],
                ['descripcion' => 'Deportista Calificado de Alto Nivel, Nacional, Macroregional y Regional-Nacional', 'monto'=>'300', 'es_modalidades'=>'1', 'es_modalidad_publico'=>'1',],
                ['descripcion' => 'Deportista Calificado de Alto Nivel, Nacional, Macroregional y Regional-Particular', 'monto'=>'400', 'es_modalidades'=>'1', 'es_modalidad_particular'=>'1',],
                ['descripcion' => 'Graduados y/o Titulados', 'monto'=>'850', 'es_modalidades'=>'1', 'es_libre'=>'0',],
                ['descripcion' => 'Traslados Internos', 'monto'=>'400', 'es_modalidades'=>'1', 'es_libre'=>'0',],
                ['descripcion' => 'Victimas de terrorismo', 'monto'=>'0', 'es_modalidades'=>'1', 'es_libre'=>'0',],//puede haber un tarifario sin monto
                ['descripcion' => 'Personas con Discapacidad', 'monto'=>'200', 'es_modalidades'=>'1', 'es_libre'=>'0',],
                ['descripcion' => 'Hijos de campesinos y/o nativos', 'monto'=>'150', 'es_modalidades'=>'1', 'es_libre'=>'0',],
                ['descripcion' => 'Licenciado de las fuerzas Armadas', 'monto'=>'200', 'es_modalidades'=>'1', 'es_libre'=>'0',],
                ['descripcion' => 'Egresados del COAR', 'monto'=>'300', 'es_modalidades'=>'1', 'es_libre'=>'0',],
                ['descripcion' => 'Egresados del Colegio Nacional de Aplicación de la UNHEVAL y de la I.E.A. Marino Meza Rosales', 'monto'=>'300', 'es_modalidades'=>'1', 'es_libre'=>'0',],
                ['descripcion' => 'CEPREVAL Carrera Profesional de Medicina Humana -Nacional', 'monto'=>'600', 'es_modalidades'=>'1', 'es_modalidad_publico'=>'1',],
                ['descripcion' => 'CEPREVAL Carrera Profesional de Medicina Humana -Particular', 'monto'=>'650', 'es_modalidades'=>'1', 'es_modalidad_particular'=>'1',],
                ['descripcion' => 'CEPREVAL Carrera Profesional de Medicina Humana -Libre', 'monto'=>'500', 'es_modalidades'=>'0', 'es_libre'=>'1',],
                ['descripcion' => 'CEPREVAL Otras Carrera Profesional -Nacional', 'monto'=>'500', 'es_modalidades'=>'1', 'es_modalidad_publico'=>'1',],
                ['descripcion' => 'CEPREVAL  Otras Carrera Profesional -Particular', 'monto'=>'550', 'es_modalidades'=>'1', 'es_modalidad_particular'=>'1',],
                 ['descripcion' => 'CEPREVAL  Otras Carrera Profesional -Libre', 'monto'=>'400', 'es_modalidades'=>'0', 'es_libre'=>'1',],
                 ['descripcion' => 'CEPREVAL Preferencial Carreras Profesionales de Medicina Humana-Nacional', 'monto'=>'350', 'es_modalidades'=>'1', 'es_modalidad_publico'=>'1',],
                 ['descripcion' => 'CEPREVAL Preferencial Carreras Profesionales de Medicina Humana-Particular', 'monto'=>'400', 'es_modalidades'=>'1', 'es_modalidad_particular'=>'1',],
                 ['descripcion' => 'CEPREVAL Preferencial Carreras Profesionales de Medicina Humana-Libre', 'monto'=>'250', 'es_modalidades'=>'0', 'es_libre'=>'1',],
                 ['descripcion' => 'CEPREVAL Preferencial Otras Carreras Profesionales-Nacional', 'monto'=>'280', 'es_modalidades'=>'1', 'es_modalidad_publico'=>'1',],
                 ['descripcion' => 'CEPREVAL Preferencial Otras Carreras Profesionales-Particular', 'monto'=>'330', 'es_modalidades'=>'1', 'es_modalidad_particular'=>'1',],
                 ['descripcion' => 'CEPREVAL Preferencial Otras Carreras Profesionales-Libre', 'monto'=>'250', 'es_modalidades'=>'0', 'es_libre'=>'1',],
                 ['descripcion' => 'Maestria derecho de postulacion', 'monto'=>'250', 'es_modalidades'=>'0', 'es_maestria'=>'1',],
                 ['descripcion' => 'Doctorado derecho de postulacion', 'monto'=>'380', 'es_modalidades'=>'0', 'es_doctorado'=>'1',],
                 ['descripcion' => 'Diplomado en Gestion por Procesos-matricula', 'monto'=>'150', 'es_modalidades'=>'0', 'es_diplomado'=>'1',],
                 ['descripcion' => 'Diplomado en Gestion por Procesos-modulo', 'monto'=>'200', 'es_modalidades'=>'0', 'es_diplomado'=>'1',],
                 ['descripcion' => 'Diplomado en Gestion por Procesos-diploma', 'monto'=>'20', 'es_modalidades'=>'0', 'es_diplomado'=>'1',],
                 ['descripcion' => 'PROCAPT-matricula', 'monto'=>'500', 'es_modalidades'=>'0', 'es_procapt'=>'1',],
                 ['descripcion' => 'PROCAPT-modulo', 'monto'=>'700', 'es_modalidades'=>'0', 'es_procapt'=>'1',]
            ]);

        //pagos
        DB::table('pagos')->insert([
                ['num_comprobante' => '1234567', 'fecha_comprobante' => '2018-04-14', 'nombre_cliente'=> 'Juan', 'dni_cliente'=> '12345678', 'detalle'=> 'Seleccion General Medicina Humana-Nacional', 'importe'=> '350', 'estado_recibo'=> '0',],
                ['num_comprobante' => '1234566', 'fecha_comprobante' => '2018-04-14', 'nombre_cliente'=> 'Maria', 'dni_cliente'=> '12345666', 'detalle'=> 'CEPREVAL Medicina Humana-Nacional', 'importe'=> '600', 'estado_recibo'=> '1',],
                ['num_comprobante' => '1111111', 'fecha_comprobante' => '2018-04-18', 'nombre_cliente'=> 'pedro', 'dni_cliente'=> '12345678', 'detalle'=> 'Diplomado en Gestion por Procesos-matricula', 'importe'=> '150', 'estado_recibo'=> '0',],
                ['num_comprobante' => '2222222', 'fecha_comprobante' => '2018-04-18', 'nombre_cliente'=> 'pedro', 'dni_cliente'=> '12345678', 'detalle'=> 'Diplomado en Gestion por Procesos-modulo', 'importe'=> '200', 'estado_recibo'=> '0',],
                ['num_comprobante' => '3333333', 'fecha_comprobante' => '2018-04-18', 'nombre_cliente'=> 'pedro', 'dni_cliente'=> '12345678', 'detalle'=> 'Diplomado en Gestion por Procesos-diploma', 'importe'=> '20', 'estado_recibo'=> '0',],
                ['num_comprobante' => '4444444', 'fecha_comprobante' => '2018-04-18', 'nombre_cliente'=> 'marta', 'dni_cliente'=> '12345678', 'detalle'=> 'PROCAPT-matricula', 'importe'=> '500', 'estado_recibo'=> '0',],
                ['num_comprobante' => '5555555', 'fecha_comprobante' => '2018-04-18', 'nombre_cliente'=> 'marta', 'dni_cliente'=> '12345678', 'detalle'=> 'PROCAPT-modulo', 'importe'=> '700', 'estado_recibo'=> '0',]
        ]);

        //programa_ncgt
        DB::table('programa_ncgts')->insert([
                ['programa_id' => '11', 'descripcion' => 'Diplomado en Gestion por Procesos', 'fecha_inicio'=> '2018-04-20', 'fecha_fin'=> '2018-06-20', 'horas'=> '100', 'costo_matricula'=> '150', 'costo_modulo_interno'=> '200', 'costo_modulo_externo'=> '250','costo_diploma'=> '20', 'numero_modulo'=> '3', 'dependencia_id'=> '27',],
                ['programa_id' => '9', 'descripcion' => 'PROCAPT Ingenieria de Sistemas', 'fecha_inicio'=> '2018-04-20', 'fecha_fin'=> '2018-07-20', 'horas'=> '0','costo_matricula'=> '500', 'costo_modulo_interno'=> '700', 'costo_modulo_externo'=> '0', 'costo_diploma'=> '0', 'numero_modulo'=> '3', 'dependencia_id'=> '30',]
        ]);
        //modulo_ncgts
        DB::table('modulo_ncgts')->insert([
                ['nombre' => 'Gestion por procesos', 'descripcion' => 'Presenta la diferencia entre el enfoque funcional y el enfoque de procesos', 'docente'=>'Juan Perez Martel', 'programa_ncgt_id'=>'1',],
                ['nombre' => 'Estadistica aplicada a los procesos', 'descripcion' => 'El curso proporciona las bases estadísticas para poder representar y manipular las variables cuantitativas de los procesos', 'docente'=>'Maria Palacios Roldan', 'programa_ncgt_id'=>'1',],
                ['nombre' => 'Modelamiento de procesos', 'descripcion' => ' presenta diferentes metodologías que permiten modelar los procesos de la organización con el fin de entender y gestionar el comportamiento', 'docente'=>'Mario Riquelme', 'programa_ncgt_id'=>'1',]
                
        ]);
         //inscripcion_ncgts
        DB::table('inscripcion_ncgts')->insert([
                ['user_id' => '3', 'programa_ncgt_id' => '1',],
                ['user_id' => '3', 'programa_ncgt_id' => '2',]
                
        ]);

        //control pago
        DB::table('control_pagos')->insert([
                ['inscripcion_ncgt_id' => '1', 'pago_id' => '3', 'tipo'=> '1',],//tipo 1 = matricula
                ['inscripcion_ncgt_id' => '1', 'pago_id' => '4', 'tipo'=> '2',],//tipo 2 = modulo
                ['inscripcion_ncgt_id' => '1', 'pago_id' => '5', 'tipo'=> '3',]//tipo 3 = diploma            
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
