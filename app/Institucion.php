<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $primaryKey = "idIns";
    protected $fillable = [
        "NombreIns",
        "Telefono",
        "Correo",
        "BorradoIns"
    ];
}
