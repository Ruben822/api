<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $primaryKey = "idMas";
    protected $fillable = [
        "NombreMas",
        "Especie",
        "Raza",
        "FechaNacimiento",
        "Foto",
        "Institucion",
        "BorradoMas"
    ];
}
