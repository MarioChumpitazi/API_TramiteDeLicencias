<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable=[
        "nombres",
        "apellidos",
        "cargo",
        "email",
        "contraseña",
        "DNI",
        "sexo",
        "edad",
        "telefono",
        "estado",
    ];
}
