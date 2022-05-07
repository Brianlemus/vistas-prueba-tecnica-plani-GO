@extends('layouts.app')

@section('content')
    <div class="container">
        <tr>
            <form action="{{route('maestros.create')}}">
                <button class="btn btn-outline-primary">Nuevo</button>
            </form>
        </tr>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre profesor</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($maestros as $maestro)
                    <tr>
                        <th scope="row">{{ $maestro->id }}</th>
                        <td>{{ $maestro->nombre }}</td>
                        <td>{{ $maestro->telefono }}</td>
                        <td>{{ $maestro->correo}}</td>
                        <td>
                            <form action="{{route('maestros.edit', $maestro->id)}}">
                                <button class="btn btn-outline-primary">Editar</button>
                            </form>
                            <form action="{{ route('maestros.destroy', $maestro->id) }}" method="POST">
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
