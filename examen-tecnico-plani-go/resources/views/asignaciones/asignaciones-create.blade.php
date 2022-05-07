@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('asignaciones.store')}}" 
            method="POST">
            @method('POST');
            @csrf
            <label> Nueva Asignatura </label></br>
            <br></br>
            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
            @endif
            <input type="hidden" name="id" id="id" value="" id="id" />
            <label>Nombre Asignatura</label></br>
            <input type="text" name="idMateria" id="idMateria" value="" class="form-control" required></br>
            <label>Estudiante</label></br>
            <input type="text" name="idEstudiante" id="idEstudiante" value="" class="form-control" required></br>
            <button type="submit" value="create" class="btn btn-outline-primary">Grabar</button>
        </form>
    </div>
@endsection
