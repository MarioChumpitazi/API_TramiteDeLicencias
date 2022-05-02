<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable=[
        "nombre",
        "descripcion",
        "estado",
        "idCliente"
    ];

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente','idCliente');
    }
}
