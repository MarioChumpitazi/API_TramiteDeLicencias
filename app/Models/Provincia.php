<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable=[
        "nombre",
        "descripcion",
        "estado",
        "idDepartamento"
    ];

    public function departamento(){
        return $this->belongsTo('App\Models\Cliente','idDepartamento');
    }
}
