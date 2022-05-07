@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('maestros.store')}}" 
            method="POST">
            @method('POST');
            @csrf
            <label> Nuevo Profesor </label></br>
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
            <label>Nombre Profesor</label></br>
            <input type="text" name="nombre" id="nombre" value="" class="form-control" required></br>
            <label>Telefono</label></br>
            <input type="text" name="telefono" id="telefono" value="" class="form-control" required></br>
            <label>Correo</label></br>
            <input type="text" name="correo" id="correo" value="" class="form-control" required></br>  
            <button type="submit" value="create" class="btn btn-outline-primary">Grabar</button>
        </form>
    </div>
@endsection
