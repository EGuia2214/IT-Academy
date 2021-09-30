@extends('template')

@section('title', 'Editar empleado')

@section('content')
    <h1>Editar Empleado</h1>
    <form action="{{route('empleados.update', $id)}}" method="POST">

        @csrf

        @method('put')

        <label class="form-label">Nombre</label>
        <p></p>
        <input type="text" class="form-control" name="nombre" value="{{$nombre}}">
        <p></p>
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <label class="form-label">Apellido</label>
        <p></p>
        <input type="text" class="form-control" name="apellido" value="{{$apellido}}" >
        <p></p>
        @error('apellido')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label class="form-label">Posición</label>
        <p></p>
        <input type="text" class="form-control" name="profesion" value="{{$profesion}}">
        <p></p>
        @error('profesion')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <br />
        <input type="submit" name="submit" value="Actualizar Empleado" class="btn btn-outline-primary">
        </form>

    
@endsection