<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    protected $table = 'ciudadanos'; 

    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'curp',
        'fecha_nacimiento', 
        'lugar_nacimiento', 
        'genero', 
        'cp', 
        'estado', 
        'colonia', 
        'calle', 
        'num_exterior', 
        'num_interior', 
        'celular', 
        'telefono', 
        'correo', 
        'clave_elector', 
        'seccion', 
    ];
}
