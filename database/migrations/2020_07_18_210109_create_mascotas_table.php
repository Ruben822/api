<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments("idMas");
            $table->string("NombreMas");
            $table->integer("Especie")->unsigned();
            $table->integer("Raza")->unsigned();
            $table->date("FechaNacimiento");
            $table->string("Foto")->nullable();
            $table->integer("Institucion")->unsigned();
            $table->timestamps();
            $table->foreign("Especie")->references('idAni')->on('animals');
            $table->foreign("Raza")->references('idRaz')->on('razas');
            $table->foreign("Institucion")->references('idIns')->on('institucions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('mascotas');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
