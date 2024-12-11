<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpatizante extends Model
{
    use HasFactory;

    protected $fillable = [
        'curp',
        'nombre',
        'paterno',
        'materno',
        'estado_nacimiento',
        'fecha_nacimiento',
        'genero',
        'clave_elector',
        'vigencia_ine',
        'telefono',
        'correo',
        'cp',
        'colonia',
        'calle',
        'externo',
        'interno',
        'seccion',
    ];
}
