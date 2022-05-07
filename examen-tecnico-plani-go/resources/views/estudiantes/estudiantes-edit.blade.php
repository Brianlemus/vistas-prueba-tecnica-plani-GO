@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('estudiantes.update', $estudiante->id) }}" method="POST">
            @method('PATCH');
            @csrf
            <input type="hidden" name="id" id="id" value="{{$estudiante->id}}" id="id" />
            <label>Nombre estudiante</label></br>
            <input type="text" name="nombre" id="nombre" value="{{$estudiante->nombre}}" class="form-control"></br>
            <label>Telefono estudiante</label></br>
            <input type="text" name="telefono" id="telefono" value="{{$estudiante->telefono}}" class="form-control"></br>
            <label>Correo</label></br>
            <input type="text" name="correo" id="correo" value="{{$estudiante->correo}}" class="form-control"></br>  
            <button type="submit" value="update" class="btn btn-outline-primary">Actualizar</button>
        </form>
    </div>
@endsection
