<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    public function index(Request $request)
    {
        $asignaciones = Asignacion::with('estudiantes','materias')->get();
        // si es por medio del api
        if($request->expectsJson()){
            return response()->json($asignaciones);
        }

        // aplicacion normal
        return view('asignaciones.asignaciones-index')->with('asignaciones', $asignaciones);

    }

    public function store(Request $request)
    {
        
        Asignacion::create($request->all());
        return redirect('/asignaciones');
    }

    public function create()
    {
        return view('asignaciones.asignaciones-create');
    }
}
