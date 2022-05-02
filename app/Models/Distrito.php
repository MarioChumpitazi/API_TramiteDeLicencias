<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $fillable=[
        "nombre",
        "description",
        "estado",
        "idProvincia"
    ];

    public function provincia(){
        return $this->belongsTo('App\Models\Cliente','idProvincia');
    }
}
