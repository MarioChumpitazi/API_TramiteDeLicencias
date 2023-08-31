<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable=[
        "estado",
        "idPerfil",
        "idModulo"

    ];


    public function perfil(){
        return $this->belongsTo('App\Models\Perfil','idPerfil');
    }

    public function modulo(){
        return $this->belongsTo('App\Models\Modulo','idModulo');
    }
}
