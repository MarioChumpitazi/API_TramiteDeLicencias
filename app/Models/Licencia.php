<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    protected $fillable=[
        "fechaEmision",
        "fechaVencimiento",
        "categoria",
        "proceso",
        "estado",
        "idTramite"
    ];

    public function tramite(){
        return $this->belongsTo('App\Models\Tramite','idTramite');
    }
}
