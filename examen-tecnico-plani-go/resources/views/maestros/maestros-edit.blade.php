@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('maestros.update', $maestro->id) }}" method="POST">
            @method('PATCH');
            @csrf
            <input type="hidden" name="id" id="id" value="{{$maestro->id}}" id="id" />
            <label>Nombre Profesor</label></br>
            <input type="text" name="nombre" id="nombre" value="{{$maestro->nombre}}" class="form-control"></br>
            <label>Telefono</label></br>
            <input type="text" name="telefono" id="telefono" value="{{$maestro->telefono}}" class="form-control"></br>
            <label>Correo</label></br>
            <input type="text" name="correo" id="correo" value="{{$maestro->correo}}" class="form-control"></br>  
            <button type="submit" value="update" class="btn btn-outline-primary">Actualizar</button>
        </form>
    </div>
@endsection
