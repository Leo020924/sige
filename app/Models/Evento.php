<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nombre_evento',
        'responsable',
        'correo',
        'lugar',
        'evento_actividad',
        'fecha_evento',
        'colonia',
        'seccion'
    ];
}
