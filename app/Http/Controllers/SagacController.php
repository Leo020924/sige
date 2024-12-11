<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class SagacController extends Controller
{
    public function alta_evento()
    {
        return view('sagac.alta_evento');
    }

    public function consulta_eventos()
    {
        $eventos = Evento::all();

        return view('sagac.consulta_evento', compact('eventos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_evento' => 'nullable',
            'responsable' => 'nullable',
            'correo' => 'nullable',
            'lugar' => 'nullable',
            'evento_actividad' => 'nullable',
            'fecha_evento' => 'nullable',
            'colonia' => 'nullable',
            'seccion' => 'nullable',
        ]);

        Evento::create($validatedData);

        return redirect()->route('consulta_eventos')->with('success', 'Evento registrado correctamente.');
    }
}
