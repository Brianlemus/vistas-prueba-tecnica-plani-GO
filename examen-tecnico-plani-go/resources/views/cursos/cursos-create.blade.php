@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('cursos.store')}}"
        method="POST">
        @method('POST');
        @csrf
        <label> Nueva Materia </label></br>
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
        <label>Nombre Curso</label></br>
        <input type="text" name="nombre_curso" id="nombre_curso" value="" class="form-control" required></br>
        <label>Creditos</label></br>
        <input type="text" name="creditos" id="creditos" value="" class="form-control" required></br>
        <label>Horario</label></br>
        <input type="text" name="horario" id="horario" value="" class="form-control" required></br>  
        <label>idProfesor</label></br>
        <input type="text" name="idProfesor" id="idProfesor" value="" class="form-control" required></br> 
        <label>fecha_creacion</label></br>
        <input type="date" name="fecha_creacion" id="fecha_creacion" value="" class="form-control" required></br> 
        <button type="submit" value="create" class="btn btn-outline-primary">Grabar</button>
        </form>
    </div>
@endsection
