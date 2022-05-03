<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable=[
        "hora",
        "dia",
        "mes",
        "año",
        "codigoPago",
        "estado"
    ];
}
