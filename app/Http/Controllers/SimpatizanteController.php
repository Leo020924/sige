<?php

namespace App\Http\Controllers;

use App\Models\Simpatizante;
use Illuminate\Http\Request;

class SimpatizanteController extends Controller
{
    public function alta_simpatizante()
    {
        return view('simpatizante.alta_simpatizante');
    }


    public function consulta_simpatizantes()
    {
        $simpatizantes = Simpatizante::all();

        return view('simpatizante.consulta_simpatizante', compact('simpatizantes'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'curp' => 'nullable|string|unique:ciudadanos,curp',
            'nombre' => 'nullable|string|max:255',
            'paterno' => 'nullable|string|max:255',
            'materno' => 'nullable|string|max:255',
            'estado_nacimiento' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'genero' => 'nullable|string',
            'clave_elector' => 'nullable|string|unique:ciudadanos,clave_elector',
            'vigencia_ine' => 'nullable|string|max:15',
            'telefono' => 'nullable|string|max:15',
            'correo' => 'nullable|email|unique:ciudadanos,correo',
            'cp' => 'nullable|string|max:5',
            'colonia' => 'nullable|string|max:255',
            'calle' => 'nullable|string|max:255',
            'externo' => 'nullable|string|max:255',
            'interno' => 'nullable|string|max:255',
            'seccion' => 'nullable|string|max:255',
        ]);

        Simpatizante::create($validatedData);

        return redirect()->route('consulta_simpatizantes')->with('success', 'Simpatizante registrado correctamente.');
    }
}
