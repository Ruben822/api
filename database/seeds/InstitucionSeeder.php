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
            "NombreIns"=>"patitas felices"
        ]);
        DB::table('institucions')->insert([
            "NombreIns"=>"little friends"
        ]);
        DB::table('institucions')->insert([
            "NombreIns"=>"peluditos"
        ]);
    }
}
