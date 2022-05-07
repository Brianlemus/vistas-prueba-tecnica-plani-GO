@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
            @method('PATCH');
            @csrf
            <input type="hidden" name="id" id="id" value="{{$curso->id}}" id="id" />
            <label>Nombre curso</label></br>
            <input type="text" name="nombre_curso" id="nombre_curso" value="{{$curso->nombre_curso}}" class="form-control"></br>
            <label>Creditos Curso</label></br>
            <input type="text" name="creditos" id="creditos" value="{{$curso->creditos}}" class="form-control"></br>
            <label>Horario</label></br>
            <input type="text" name="horario" id="horario" value="{{$curso->horario}}" class="form-control"></br>  
            <label>Idprofesor</label></br>
            <input type="text" name="idProfesor" id="idProfesor" value="{{$curso->idProfesor}}" class="form-control"></br>       
            <button type="submit" value="update" class="btn btn-outline-primary">Actualizar</button>
        </form>
    </div>
@endsection
