<?php

namespace App\Http\Controllers;

use App\Models\Votante;
use Illuminate\Http\Request;

class VotanteController extends Controller
{
    public function alta_votante()
    {
        return view('votantes.alta_votante');
    }


    public function consulta_votantes()
    {
        $votantes = Votante::all();

        return view('votantes.consulta_votante', compact('votantes'));
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

        Votante::create($validatedData);

        return redirect()->route('consulta_votantes')->with('success', 'Votante registrado correctamente.');
    }
}
