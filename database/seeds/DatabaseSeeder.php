<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AnimalSeeder::class);
        $this->call(InstitucionSeeder::class);
        $this->call(RazaSeeder::class);
        $this->call(MascotaSeeder::class);
    }
}
