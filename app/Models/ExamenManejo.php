<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenManejo extends Model
{
    protected $fillable=[
        "nota",
        "intentos",
        "estado",
        "idTramite"
    ];

    public function tramite(){
        return $this->belongsTo('App\Models\Tramite','idTramite');
    }
}
