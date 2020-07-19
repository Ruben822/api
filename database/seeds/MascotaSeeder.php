<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mascotas')->insert([
            "NombreMas"=>"paco",
            "Especie"=>1,
            "Raza"=>23,
            "FechaNacimiento"=>"2020-07-08",
            "Foto"=>"jisjis",
            "Institucion"=>1
        ]);
        DB::table('mascotas')->insert([
            "NombreMas"=>"manchas",
            "Especie"=>2,
            "Raza"=>133,
            "FechaNacimiento"=>"2020-07-08",
            "Foto"=>"jisjis",
            "Institucion"=>2
        ]);
        DB::table('mascotas')->insert([
            "NombreMas"=>"pelos",
            "Especie"=>1,
            "Raza"=>13,
            "FechaNacimiento"=>"2020-07-08",
            "Foto"=>"jisjis",
            "Institucion"=>3
        ]);
        DB::table('mascotas')->insert([
            "NombreMas"=>"bola",
            "Especie"=>2,
            "Raza"=>112,
            "FechaNacimiento"=>"2020-07-08",
            "Foto"=>"jisjis",
            "Institucion"=>1
        ]);
        DB::table('mascotas')->insert([
            "NombreMas"=>"patitas",
            "Especie"=>1,
            "Raza"=>55,
            "FechaNacimiento"=>"2020-07-08",
            "Foto"=>"jisjis",
            "Institucion"=>3
        ]);
        DB::table('mascotas')->insert([
            "NombreMas"=>"zorro",
            "Especie"=>1,
            "Raza"=>46,
            "FechaNacimiento"=>"2020-07-08",
            "Foto"=>"jisjis",
            "Institucion"=>1
        ]);
        DB::table('mascotas')->insert([
            "NombreMas"=>"pelusa",
            "Especie"=>2,
            "Raza"=>123,
            "FechaNacimiento"=>"2020-07-08",
            "Foto"=>"jisjis",
            "Institucion"=>3
        ]);
    }
}
