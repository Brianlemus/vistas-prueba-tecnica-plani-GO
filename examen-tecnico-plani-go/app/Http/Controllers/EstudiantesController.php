<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index(Request $request)
    {
        $estudiantes = Estudiante::all();
        // si es por medio del api
        if($request->expectsJson()){
            return response()->json($estudiantes);
        }

        // aplicacion normal
        return view('estudiantes.estudiantes-index')->with('estudiantes', $estudiantes);
            // return response()->json(Estudiante::all());
        
    }

    public function store(Request $request)
    {
        $request->validate( rules:[
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'required|email'
        ]);

        Estudiante::create($request->all());
        return redirect('/estudiantes');
    }

    public function create()
    {
        return view('estudiantes.estudiantes-create');
    }

    public function update(Request $request, $estudiante_id)
    {
        $estudiante = Estudiante::findOrFail($estudiante_id);
        $estudiante->update($request->all());
        return redirect('/estudiantes');
    }

    public function edit(Request $request, $estudiante_id)
    {
        $estudiante = Estudiante::findOrFail($estudiante_id);
        if(!$request->expectsJson()){
            return view('estudiantes.estudiantes-edit')->with('estudiante', $estudiante);
        }
    }

    public function destroy(Request $request, $estudiante_id)
    {
        $estudiante = Estudiante::findOrFail($estudiante_id);
        $estudiante->delete();
        if($request->expectsJson()){
            return response()->json('Ok');
        }
        return redirect('/estudiantes');
    }
}
