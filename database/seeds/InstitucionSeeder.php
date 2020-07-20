<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institucions')->insert([
            "NombreIns"=>"patitas felices",
            "Telefono"=>"1231231231",
            "Correo"=>"patitas@gmail.com"
        ]);
        DB::table('institucions')->insert([
            "NombreIns"=>"little friends",
            "Telefono"=>"3213213211",
            "Correo"=>"littlefriends@gmail.com"
        ]);
        DB::table('institucions')->insert([
            "NombreIns"=>"peluditos",
            "Telefono"=>"1234567891",
            "Correo"=>"peluditos@gmail.com"
        ]);
    }
}
