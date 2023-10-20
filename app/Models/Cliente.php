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
        "password",
        "dni",
        "sexo",
        "edad",
        "telefono",
        "estado",
        "idPerfil",
        "idDepartamento",
        // AGREGADO
        "tipo_cliente"
    ];

    public function perfil(){
        return $this->belongsTo('App\Models\Perfil','idPerfil');
    }

    public function departamento(){
        return $this->belongsTo('App\Models\Departamento','idDepartamento');
    }

}
