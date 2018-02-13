<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        $this->call(DistritosTableSeeder::class);
        $this->call(FacultadesTableSeeder::class);
        $this->call(EscuelasTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(DatosForUsersTableSeeder::class);
<<<<<<< HEAD
        $this->call(DatosForRsuTableSeeder::class);
        $this->call(UsersTableSeeder::class);
=======
        $this->call(UsersTableSeeder::class);       
>>>>>>> 88defb16fbe842fe4e0eddecda6802b2f126ebc8
    }
}
