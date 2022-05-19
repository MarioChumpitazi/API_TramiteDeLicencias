<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=[
        "nombres",
        "apellidos",
        "email",
        "DNI",
        "sexo",
        "edad",
        "telefono",
        "estado",
    ];

}
