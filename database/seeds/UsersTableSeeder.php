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
        //Usuarios Saúl
        DB::table('users')->insert([
                ['dni' => '00000001',
                'nombres' => 'Administrador ',
                'apellido_paterno' => 'APaterno',
                'apellido_materno' => 'Amaterno',
                'email' => '00000001@hotmail.com',
                'password' => bcrypt('00000001'),
                ],
                [
                'dni' => '00000002',
                'nombres' => 'Docente ',
                'apellido_paterno' => 'APaterno2',
                'apellido_materno' => 'Amaterno2',
                'email' => '00000002@hotmail.com',
                'password' => bcrypt('00000002'),
                ],
                [
                'dni' => '00000003',
                'nombres' => 'Estudiante',
                'apellido_paterno' => 'APaterno3',
                'apellido_materno' => 'Amaterno3',
                'email' => '00000003@hotmail.com',
                'password' => bcrypt('00000003'),
                ],
                [
                'dni' => '48315690',
                'nombres' => 'Saúl',
                'apellido_paterno' => 'Escandón',
                'apellido_materno' => 'Munguía',
                'email' => 'aescandonmunguia@hotmail.com',
                'password' => bcrypt('12345678'),
                ]
         ]);     
        //Usuario Teddy
        DB::table('users')->insert([
                'dni' => '44485816',
                'nombres' => 'Teddy',
                'apellido_paterno' => 'Tafur',
                'apellido_materno' => 'Guerra',
                'email' => 'ttafurg@gmail.com',
                'password' => bcrypt('pichoncito'),
        ]); 
        //Usuario Jhonattan 
        DB::table('users')->insert([
                'dni' => '46181970',
                'nombres' => 'Jhonattan',
                'apellido_paterno' => 'Carlos',
                'apellido_materno' => 'Simon',
                'email' => 'yotacs14@gmail.com',
                'password' => bcrypt('freedon'),
        ]); 
        DB::table('users')->insert([
                'dni' => '00000004',
                'nombres' => 'Pepe',
                'apellido_paterno' => 'Ramos',
                'apellido_materno' => 'Simon',
                'email' => 'pepe@gmail.com',
                'password' => bcrypt('00000004'),
        ]);
        DB::table('users')->insert([
                'dni' => '00000005',
                'nombres' => 'cepre',
                'apellido_paterno' => 'Ramos',
                'apellido_materno' => 'Simon',
                'email' => 'cepreval@gmail.com',
                'password' => bcrypt('00000005'),
        ]);  
        //===================================================
        //RolesUsuario Generales
            //Administrador General
        DB::table('rol_users')->insert([
                'user_id' => '1',
                'rol_id' => '2',
        ]);
            //Docente
        DB::table('rol_users')->insert([
            'user_id' => '2',
            'rol_id' => '3',
        ]);

        DB::table('docentes')->insert([
             'user_id'=>'2',
             'escuela_id'=>'10',
             'docente_categoria_id'=>'1',
             'docente_condicion_id'=>'1',
             'docente_dedicacion_id'=>'1',
             'dep_academico_id'=>'1',
             'h_lectivas'=>'12','h_n_lectivas'=>'12',
        ]);
            //Estudiante
        DB::table('rol_users')->insert([
                'user_id' => '3',
                'rol_id' => '4',
        ]);

        //Roles Saúl
            //all
        DB::table('rol_users')->insert([
                ['user_id' => '4', 'rol_id' => '2',],
                ['user_id' => '4', 'rol_id' => '3',],
                ['user_id' => '4', 'rol_id' => '4',],
                ['user_id' => '4', 'rol_id' => '5',],
                ['user_id' => '4', 'rol_id' => '6',]
        ]);
            //DRSU
        //DB::table('rol_users')->insert([
                //'user_id' => '5',
                //'rol_id' => '5',
        //]);
            //DRSU-F
        //DB::table('rol_users')->insert([
                //'user_id' => '6',
                //'rol_id' => '6',
        //]);

        //Usuarios Teddy
        DB::table('rol_users')->insert([
    
                 ['user_id' => '5', 'rol_id' => '2',],
                 ['user_id' => '5', 'rol_id' => '30',],
                 ['user_id' => '5', 'rol_id' => '31',],
                 ['user_id' => '5', 'rol_id' => '32',]                
        ]);
        
        //Usuario-Rol Jhonattan 
        DB::table('rol_users')->insert([
    
                 [
                    'user_id' => '6',
                    'rol_id' => '2',
                ],
                [
                    'user_id' => '6',
                    'rol_id' => '7',
                ],
                [
                    'user_id' => '6',
                    'rol_id' => '8',
                ]
        ]);
        DB::table('rol_users')->insert([
    
                 [
                    'user_id' => '7',
                    'rol_id' => '7',
                ],
                 [
                    'user_id' => '7',
                    'rol_id' => '8',
                ]
              
        ]);
           DB::table('rol_users')->insert([
    
                 [
                    'user_id' => '8',
                    'rol_id' => '7',
                ],
                 [
                    'user_id' => '8',
                    'rol_id' => '9',
                ]
              
        ]);
    }
}
