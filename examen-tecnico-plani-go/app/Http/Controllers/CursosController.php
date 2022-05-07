<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    
    public function index(Request $request)
    {
        $cursos = Materia::with('profesor')->get();
        // si es por medio del api
        if($request->expectsJson()){
            return response()->json($cursos);
        }

        // aplicacion normal
        return view('cursos.cursos-index')->with('cursos', $cursos);
    }

    
    public function store(Request $request)
    {
        $request->validate( rules:[
            'nombre_curso' => 'required',
            'creditos' => 'required',
            'horario' => 'required',
            'idProfesor' => 'required',
            'fecha_creacion' => 'required'
        ]);

        Materia::create($request->all());
        return redirect('/cursos');
    }

    public function create()
    {
        return view('cursos.cursos-create');
    }

    public function update(Request $request, $materia_id)
    {
        //  dd($request->all(), $materia_id);
        $materia = Materia::findOrFail($materia_id);
        $materia->update($request->all());
        return redirect('/cursos');
    }

    public function edit(Request $request, $materia_id)
    {
        $curso = Materia::findOrFail($materia_id);
        if(!$request->expectsJson()){
            return view('cursos.cursos-edit')->with('curso', $curso);
        }
    }

    public function destroy(Request $request, $materia_id)
    {
        $materia = Materia::findOrFail($materia_id);
        $materia->delete();
        if($request->expectsJson()){
            return response()->json('Ok');
        }
        return redirect('/cursos');
    }

}
