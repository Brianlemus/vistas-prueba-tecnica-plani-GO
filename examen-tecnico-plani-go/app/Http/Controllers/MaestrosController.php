<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $maestros = Profesor::all();
        // si es por medio del api
        if($request->expectsJson()){
            return response()->json($maestros);
        }

        // aplicacion normal
        return view('maestros.maestros-index')->with('maestros', $maestros);
    }

    
    public function store(Request $request)
    {
        $request->validate( rules:[
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'required|email'
        ]);
        
        Profesor::create($request->all());
        return redirect('/maestros');
    }

    public function create()
    {
        return view('maestros.maestros-create');
    }
    
    public function update(Request $request, $profesor_id)
    {
        //  dd($request->all(), $materia_id);
        $maestro = Profesor::findOrFail($profesor_id);
        $maestro->update($request->all());
        return redirect('/maestros');
    }

    public function edit(Request $request, $profesor_id)
    {
        $maestro = Profesor::findOrFail($profesor_id);
        if(!$request->expectsJson()){
            return view('maestros.maestros-edit')->with('maestro', $maestro);
        }
    }

    public function destroy(Request $request, $profesor_id)
    {
        $Profesor = Profesor::findOrFail($profesor_id);
        $Profesor->delete();
        if($request->expectsJson()){
            return response()->json('Ok');
        }
        return redirect('/maestros');
    }
}
