<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
           "NombreAni"=>"perro"
        ]);
        DB::table('animals')->insert([
            "NombreAni"=>"gato"
         ]);
    }
}
