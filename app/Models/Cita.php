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
        "codigoPago",
        "estado",
        "idCliente",
        "idTramite"
    ];

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente','idCliente');
    }

    public function tramite(){
        return $this->belongsTo('App\Models\Tramite','idTramite');
    }

}
