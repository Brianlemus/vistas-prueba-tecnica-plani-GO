@extends('layouts.app')

@section('content')
    <div class="container">
         <tr>
            <form action="{{route('cursos.create')}}">
                <button class="btn btn-outline-primary">Nuevo</button>
            </form>
        </tr>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre curso</th>
                    <th scope="col">Creditos</th>
                    <th scope="col">Profesor</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <th scope="row">{{ $curso->id }}</th>
                        <td>{{ $curso->nombre_curso }}</td>
                        <td>{{ $curso->creditos }}</td>
                        <td>{{ $curso->profesor->nombre }}</td>
                        <td>{{ $curso->horario }}</td>
                        <td>
                            <form action="{{route('cursos.edit', $curso->id)}}">
                                <button class="btn btn-outline-primary">Editar</button>
                            </form>
                            <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
