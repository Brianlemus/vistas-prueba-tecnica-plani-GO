@extends('layouts.app')

@section('content')
    <div class="container">
        <tr>
            <form action="{{route('asignaciones.create')}}">
                <button class="btn btn-outline-primary">Nuevo</button>
            </form>
        </tr>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Estudiante</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asignaciones as $asignacion)
                    <tr>
                        <th scope="row">{{ $asignacion->id }}</th>
                        <td>{{ $asignacion->materias->nombre_curso }}</td>
                        <td>{{ $asignacion->estudiantes->nombre}}</td>
                       </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
