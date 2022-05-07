@extends('layouts.app')

@section('content')
    <div class="container">
        <tr>
            <form action="{{route('estudiantes.create')}}">
                <button class="btn btn-outline-primary">Nuevo</button>
            </form>
        </tr>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre estudiante</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <th scope="row">{{ $estudiante->id }}</th>
                        <td>{{ $estudiante->nombre}}</td>
                        <td>{{ $estudiante->telefono }}</td>
                        <td>{{ $estudiante->correo}}</td>
                        <td>
                            <form action="{{route('estudiantes.edit', $estudiante->id)}}">
                                <button class="btn btn-outline-primary">Editar</button>
                            </form>
                            <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST">
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
