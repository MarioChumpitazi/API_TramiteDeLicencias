<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $fillable=[
        "fechaPago",
        "nOperacion",
        "asistencia",
        "estado",
        "idEmpleado"
    ];

}
