<?php

namespace App\Http\Controllers;

use App\Models\Ciudadano;
use Illuminate\Http\Request;

class CiudadanoController extends Controller
{
    public function alta_ciudadano()
    {
        return view('ciudadano.alta_ciudadano');
    }

    public function consulta_ciudadanos()
    {
        $ciudadanos = Ciudadano::all();

        return view('ciudadano.consulta_ciudadano', compact('ciudadanos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
            'curp' => 'required|string|unique:ciudadanos,curp',
            'fecha_nacimiento' => 'required|date',
            'lugar_nacimiento' => 'required|string|max:255',
            'genero' => 'required|string',
            'cp' => 'required|string|max:5',
            'estado' => 'required|string|max:255',
            'colonia' => 'required|string|max:255',
            'calle' => 'required|string|max:255',
            'num_exterior' => 'nullable|string|max:255',
            'num_interior' => 'nullable|string|max:255',
            'celular' => 'nullable|string|max:15',
            'telefono' => 'nullable|string|max:15',
            'correo' => 'required|email|unique:ciudadanos,correo',
            'clave_elector' => 'required|string|unique:ciudadanos,clave_elector',
            'seccion' => 'nullable|string|max:255',
        ]);

        Ciudadano::create($validatedData);

        return redirect()->route('consulta_ciudadano')->with('success', 'Ciudadano registrado correctamente.');
    }
}
