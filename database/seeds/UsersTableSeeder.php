<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['dni' => '00000001', 'nombres' => 'Administrador ', 'apellido_paterno' => 'APaterno', 'apellido_materno' => 'Amaterno',
                'email' => '00000001@hotmail.com', 'password' => bcrypt('00000001'), 'dependencia_id_depende' => null,],//1
            ['dni' => '00000002', 'nombres' => 'Docente BD', 'apellido_paterno' => 'APaterno2', 'apellido_materno' => 'Amaterno2',
                'email' => '00000002@hotmail.com', 'password' => bcrypt('00000002'), 'dependencia_id_depende' => null,],//2
            ['dni' => '00000003', 'nombres' => 'Estudiante', 'apellido_paterno' => 'APaterno3', 'apellido_materno' => 'Amaterno3',
                'email' => '00000003@hotmail.com','password' => bcrypt('00000003'), 'dependencia_id_depende' => null,],//3
            ['dni' => '48315690', 'nombres' => 'Saúl', 'apellido_paterno' => 'Escandón', 'apellido_materno' => 'Munguía',
                'email' => 'aescandonmunguia@hotmail.com', 'password' => bcrypt('12345678'), 'dependencia_id_depende' => null,],//4 Usuarios Saúl
            [ 'dni' => '44485816', 'nombres' => 'Teddy', 'apellido_paterno' => 'Tafur', 'apellido_materno' => 'Guerra',
                'email' => 'ttafurg@gmail.com', 'password' => bcrypt('12345'), 'dependencia_id_depende' => 30,],//5 Usuario Teddy
            ['dni' => '46181970', 'nombres' => 'Jhonattan', 'apellido_paterno' => 'Carlos', 'apellido_materno' => 'Simon',
                'email' => 'yotacs14@gmail.com', 'password' => bcrypt('yota'), 'dependencia_id_depende' => null,],//6 Usuario Jhonattan
            ['dni' => '00000004', 'nombres' => 'Pepe', 'apellido_paterno' => 'Ramos', 'apellido_materno' => 'Simon',
                'email' => 'pepe@gmail.com', 'password' => bcrypt('00000004'),'dependencia_id_depende' => null,],//
            ['dni' => '00000005', 'nombres' => 'Luciana', 'apellido_paterno' => 'Ramos', 'apellido_materno' => 'Simon',
                'email' => 'cepreval@gmail.com', 'password' => bcrypt('00000005'), 'dependencia_id_depende' => null,],//8
            ['dni' => '00000006', 'nombres' => 'Juanito', 'apellido_paterno' => 'Martel', 'apellido_materno' => 'Lopez',
                'email' => 'juanito@gmail.com', 'password' => bcrypt('00000006'), 'dependencia_id_depende' => null,],//9
            //usuario de los pagos (otros)
            ['dni' => 12345678, 'nombres' => 'Juan', 'apellido_paterno' => 'Perales', 'apellido_materno' => 'Loarte',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],//10
            ['dni' => 22222222, 'nombres' => 'Maria', 'apellido_paterno' => 'Gutierrez', 'apellido_materno' => 'Ramirez',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 33333333, 'nombres' => 'Pedro', 'apellido_paterno' => 'Lino', 'apellido_materno' => 'Salvador',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 44444444, 'nombres' => 'Marta', 'apellido_paterno' => 'Sanchez', 'apellido_materno' => 'Rodriguez',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 55555555, 'nombres' => 'Juanito', 'apellido_paterno' => 'Jimenez', 'apellido_materno' => 'Torres',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 66666666, 'nombres' => 'Emanuel', 'apellido_paterno' => 'Lopez', 'apellido_materno' => 'Florez',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 77777777, 'nombres' => 'Karol', 'apellido_paterno' => 'Llanos', 'apellido_materno' => 'Quispe',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 88888888, 'nombres' => 'Jesus', 'apellido_paterno' => 'Espinoza', 'apellido_materno' => 'Muñoz',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 99999999, 'nombres' => 'Luis', 'apellido_paterno' => 'Lino', 'apellido_materno' => 'Simón',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 11112222, 'nombres' => 'Rafael', 'apellido_paterno' => 'Torres', 'apellido_materno' => 'Garcia',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 11113333, 'nombres' => 'Pedro', 'apellido_paterno' => 'Ramirez', 'apellido_materno' => 'Flores',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 11114444, 'nombres' => 'Lenin', 'apellido_paterno' => 'Espinoza', 'apellido_materno' => 'Martel',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 11115555, 'nombres' => 'Luciana', 'apellido_paterno' => 'Fernandez', 'apellido_materno' => 'Daza',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            ['dni' => 11116666, 'nombres' => 'Liz', 'apellido_paterno' => 'Carlos', 'apellido_materno' => 'Malpartida',
                'email' => null, 'password' => null, 'dependencia_id_depende' => null,],
            [//id = 24----Otros usuarios Saul
                'dni' => '00000010',
                'nombres' => 'DRSU-F',
                'apellido_paterno' => 'APaterno',
                'apellido_materno' => 'Amaterno',
                'email' => '00000010@hotmail.com',
                'password' => bcrypt('00000010'),
                'dependencia_id_depende' => null,
             ],
            [//id = 25
                'dni' => '00000011',
                'nombres' => 'DRSU',
                'apellido_paterno' => 'APaterno',
                'apellido_materno' => 'Amaterno',
                'email' => '00000011@hotmail.com',
                'password' => bcrypt('00000011'),
                'dependencia_id_depende' => null,
            ],
            //id = 26----Usuarios docentes de educación
            ['dni' => '00000026',
                'nombres' => 'ABELARDO CESAR',
                'apellido_paterno' => 'ACOSTA',
                'apellido_materno' => 'INGARUCA',
                'email' => '00000026@hotmail.com',
                'password' => bcrypt('00000026'),
                'dependencia_id_depende' => 30,
            ],
            [//id = 27
                'dni' => '00000027',
                'nombres' => 'RAUL JORGE',
                'apellido_paterno' => 'ALIAGA',
                'apellido_materno' => 'CAMARENA',
                'email' => '00000027@hotmail.com',
                'password' => bcrypt('00000027'),
                'dependencia_id_depende' => 30,
            ],
            [
                'dni' => '00000028',
                'nombres' => 'FIDEL',
                'apellido_paterno' => 'ALVARADO',
                'apellido_materno' => 'ECHEVARRIA',
                'email' => '00000028@hotmail.com',
                'password' => bcrypt('00000028'),
                'dependencia_id_depende' => 30,
            ],
            [//id = 29
                'dni' => '00000029',
                'nombres' => 'CLORINDA NATIVIDAD',
                'apellido_paterno' => 'BARRIONUEVO',
                'apellido_materno' => 'TORRES',
                'email' => '00000029@hotmail.com',
                'password' => bcrypt('00000029'),
                'dependencia_id_depende' => 30,
            ],
            [
                'dni' => '00000030',
                'nombres' => 'LAURA CARMEN',
                'apellido_paterno' => 'BARRIONUEVO',
                'apellido_materno' => 'TORRES',
                'email' => '00000030@hotmail.com',
                'password' => bcrypt('00000030'),
                'dependencia_id_depende' => 30,
            ],
            [//id = 31
                'dni' => '00000031',
                'nombres' => 'MANUEL ROBERTO',
                'apellido_paterno' => 'BLANCO',
                'apellido_materno' => 'ALIAGA',
                'email' => '00000031@hotmail.com',
                'password' => bcrypt('00000031'),
                'dependencia_id_depende' => 30,
            ],
            ['dni' => '00000032',
                'nombres' => 'NICEFORO',
                'apellido_paterno' => 'BUSTAMANTE',
                'apellido_materno' => 'PAULINO',
                'email' => '00000032@hotmail.com',
                'password' => bcrypt('00000032'),
                'dependencia_id_depende' => 30,
            ],
            [//id = 33
                'dni' => '00000033',
                'nombres' => 'ANDRES AVELINO',
                'apellido_paterno' => 'CAMARA',
                'apellido_materno' => 'ACERO',
                'email' => '00000033@hotmail.com',
                'password' => bcrypt('00000033'),
                'dependencia_id_depende' => 30,
            ],
            //Usuarios otros docente
            [//id = 34 docentes de centro de idiomas
            'dni' => '00000034',
            'nombres' => 'Juan Marino',
            'apellido_paterno' => 'Gutierrez',
            'apellido_materno' => 'Peralta',
            'email' => '00000034@hotmail.com',
            'password' => bcrypt('00000034'),
            'dependencia_id_depende' => 65,
            ],
            [//id = 35
            'dni' => '00000035',
            'nombres' => 'Luisa',
            'apellido_paterno' => 'Gamarra',
            'apellido_materno' => 'Torres',
            'email' => '00000035@hotmail.com',
            'password' => bcrypt('00000035'),
            'dependencia_id_depende' => 65,
            ],
            [//id = 36 docentes de estudios informaticos
            'dni' => '00000036',
            'nombres' => 'Jorge',
            'apellido_paterno' => 'Chaca',
            'apellido_materno' => 'Carlos',
            'email' => '00000036@hotmail.com',
            'password' => bcrypt('00000036'),
            'dependencia_id_depende' => 66,
            ],
            [//id = 37
                'dni' => '00000037',
                'nombres' => 'Manuel',
                'apellido_paterno' => 'Silva',
                'apellido_materno' => 'Lopez',
                'email' => '00000037@hotmail.com',
                'password' => bcrypt('00000037'),
                'dependencia_id_depende' => 66,
            ],
            [//id = 38
            'dni' => '00000038',
            'nombres' => 'Juan',
            'apellido_paterno' => 'Bernardo',
            'apellido_materno' => 'Loyola',
            'email' => '00000038@hotmail.com',
            'password' => bcrypt('00000038'),
            'dependencia_id_depende' => 1,
            ],
            //Proyección Social y extensión Cultural
            [//id = 39
            'dni' => '00000039',
            'nombres' => 'Jef. U',
            'apellido_paterno' => 'Proyección',
            'apellido_materno' => 'Social',
            'email' => '00000039@hotmail.com',
            'password' => bcrypt('00000039'),
            'dependencia_id_depende' => 1,
            ],
            [//id = 40
            'dni' => '00000040',
            'nombres' => 'Jef. U',
            'apellido_paterno' => 'Extensión',
            'apellido_materno' => 'Cultural',
            'email' => '00000040@hotmail.com',
            'password' => bcrypt('00000040'),
            'dependencia_id_depende' => 1,
            ]

         ]);     

        //===================================================
        //RolesUsuario Generales

        DB::table('rol_users')->insert([
            ['user_id' => '1', 'rol_id' => '2',], //Administrador General
            ['user_id' => '2', 'rol_id' => '3',], //Docente
            ['user_id' => '3', 'rol_id' => '4',], //Estudiante
            //Roles Saúl
            ['user_id' => '4', 'rol_id' => '2',],
            ['user_id' => '4', 'rol_id' => '3',],
            ['user_id' => '4', 'rol_id' => '5',],
            ['user_id' => '4', 'rol_id' => '6',],
            //roles Tedy
            ['user_id' => '5', 'rol_id' => '2',],
            ['user_id' => '5', 'rol_id' => '3',],
            ['user_id' => '5', 'rol_id' => '30',],
            ['user_id' => '5', 'rol_id' => '31',],
            ['user_id' => '5', 'rol_id' => '32',],
            //roles Jhonattan
            ['user_id' => '6', 'rol_id' => '2',],
            ['user_id' => '6', 'rol_id' => '7',],
            ['user_id' => '6', 'rol_id' => '8',],
            ['user_id' => '6', 'rol_id' => '9',],
            ['user_id' => '6', 'rol_id' => '16',],
            //roles del usuario 7
            ['user_id' => '7', 'rol_id' => '7',],
            ['user_id' => '7', 'rol_id' => '8',],
            //roles del usuario 8
            ['user_id' => '8', 'rol_id' => '7',],
            ['user_id' => '8','rol_id' => '9',],
            //roles del usuario 9
            ['user_id' => 9, 'rol_id' => 35,],
            //roles de los usurios 10 al 23
            ['user_id' => '10','rol_id' => 4,],
            ['user_id' => '11','rol_id' => 4,],
            ['user_id' => '12','rol_id' => 4,],
            ['user_id' => '13','rol_id' => 4,],
            ['user_id' => '14','rol_id' => '33',],
            ['user_id' => '15','rol_id' => '33',],
            ['user_id' => '16','rol_id' => '33',],
            ['user_id' => '17','rol_id' => '33',],
            ['user_id' => '18','rol_id' => '33',],
            ['user_id' => '19','rol_id' => '33',],
            ['user_id' => '20','rol_id' => '33',],
            ['user_id' => '21','rol_id' => '33',],
            ['user_id' => '22','rol_id' => '33',],
            ['user_id' => '23','rol_id' => 35,],
            //roles de los usurios 26 al 33
            ['user_id' => '26','rol_id' => '3',],
            ['user_id' => '27','rol_id' => '3',],
            ['user_id' => '28','rol_id' => '3',],
            ['user_id' => '29','rol_id' => '3',],
            ['user_id' => '30','rol_id' => '3',],
            ['user_id' => '31','rol_id' => '3',],
            ['user_id' => '32','rol_id' => '3',],
            ['user_id' => '33','rol_id' => '3',],
            //roles de los usurios 34 al 37
            ['user_id' => 34,'rol_id' => 34,],
            ['user_id' => 35,'rol_id' => 34,],
            ['user_id' => 36,'rol_id' => 34,],
            ['user_id' => 37,'rol_id' => 34,],
            ['user_id' => 38,'rol_id' => 7,],
            ['user_id' => 38,'rol_id' => 14,],
            ['user_id' => 38,'rol_id' => 15,],
            ['user_id' => 38,'rol_id' => 16,],
            ['user_id' => 38,'rol_id' => 17,],
            ['user_id' => 38,'rol_id' => 18,]

        ]);

        //DRSU-F
        DB::table('rol_users')->insert([
            [
              'user_id' => '24',
              'rol_id' => '3',
            ],
            [
              'user_id' => '24',
              'rol_id' => '6',
            ]
        ]);
        //DRSU
        DB::table('rol_users')->insert([
            [
              'user_id' => '25',
              'rol_id' => '3',
            ],
            [
              'user_id' => '25',
              'rol_id' => '5',
            ]
        ]);

        DB::table('docentes')->insert([
            [//usuario Docente por defecto
             'user_id'=>'2',
             'escuela_id'=>22,
             'docente_categoria_id'=>'1',
             'docente_condicion_id'=>'1',
             'docente_dedicacion_id'=>'1',
             'dependencia_academico_id'=>50,
             'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente DRSU-F
             'user_id'=>'24',
             'escuela_id'=>22,
             'docente_categoria_id'=>'1',
             'docente_condicion_id'=>'1',
             'docente_dedicacion_id'=>'1',
             'dependencia_academico_id'=>50,
             'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente DRSU
             'user_id'=>'25',
             'escuela_id'=>22,
             'docente_categoria_id'=>'1',
             'docente_condicion_id'=>'1',
             'docente_dedicacion_id'=>'1',
             'dependencia_academico_id'=>48,
             'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            //docentes usuarios 26 al 33
            [//Docente 26
                'user_id'=>26,
                'escuela_id'=>30,
                'docente_categoria_id'=>'1',
                'docente_condicion_id'=>'1',
                'docente_dedicacion_id'=>'1',
                'dependencia_academico_id'=>55,
                'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente 27
                'user_id'=>27,
                'escuela_id'=>30,
                'docente_categoria_id'=>'1',
                'docente_condicion_id'=>'1',
                'docente_dedicacion_id'=>'1',
                'dependencia_academico_id'=>55,
                'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente 28
                'user_id'=>28,
                'escuela_id'=>30,
                'docente_categoria_id'=>'1',
                'docente_condicion_id'=>'1',
                'docente_dedicacion_id'=>'1',
                'dependencia_academico_id'=>55,
                'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente 29
                'user_id'=>29,
                'escuela_id'=>30,
                'docente_categoria_id'=>'1',
                'docente_condicion_id'=>'1',
                'docente_dedicacion_id'=>'1',
                'dependencia_academico_id'=>55,
                'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente 30
                'user_id'=>30,
                'escuela_id'=>30,
                'docente_categoria_id'=>'1',
                'docente_condicion_id'=>'1',
                'docente_dedicacion_id'=>'1',
                'dependencia_academico_id'=>55,
                'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente 31
                'user_id'=>31,
                'escuela_id'=>30,
                'docente_categoria_id'=>'1',
                'docente_condicion_id'=>'1',
                'docente_dedicacion_id'=>'1',
                'dependencia_academico_id'=>55,
                'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente 32
                'user_id'=>32,
                'escuela_id'=>30,
                'docente_categoria_id'=>'1',
                'docente_condicion_id'=>'1',
                'docente_dedicacion_id'=>'1',
                'dependencia_academico_id'=>55,
                'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente 33
                'user_id'=>33,
                'escuela_id'=>30,
                'docente_categoria_id'=>'1',
                'docente_condicion_id'=>'1',
                'docente_dedicacion_id'=>'1',
                'dependencia_academico_id'=>55,
                'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ],
            [//Docente con usuario 5
            'user_id'=>5,
            'escuela_id'=>30,
            'docente_categoria_id'=>'1',
            'docente_condicion_id'=>'1',
            'docente_dedicacion_id'=>'1',
            'dependencia_academico_id'=>55,
            'h_lectivas'=>'12','h_n_lectivas'=>'12',
            ]
        ]);

        DB::table('estudiantes')->insert([
             'user_id'=>'3',
             'cod_univ'=>'2012000012',
             'escuela_id'=>'42',
             'estado'=>'1',
             'modalidad_ingreso'=>'17',
             'f_ingreso'=>'2012-03-03',
             'f_egreso'=>'2017-12-20',
             'anio_estudio'=>'0',
        ]);


        DB::table('docentes')->insert([
             'user_id'=>'4',
             'escuela_id'=>22,
             'docente_categoria_id'=>'1',
             'docente_condicion_id'=>'1',
             'docente_dedicacion_id'=>'1',
             'h_lectivas'=>'12','h_n_lectivas'=>'12',
        ]);

        //Proyeccion Social
        DB::table('rol_users')->insert([
            'user_id' => '39',
            'rol_id' => '5',
        ]);
            //Extensión Cultural
        DB::table('rol_users')->insert([
            'user_id' => '40',
            'rol_id' => '5',
        ]);
    }
}
