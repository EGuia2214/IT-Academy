@extends('template')

@section('title', 'Crear empleado')

@section('content')
    <h1>Dar de alta Empleado</h1>
    <form action="{{route('empleados.store')}}" method="POST">

        @csrf

        <label class="form-label">Nombre</label>
        <p></p>
        <input type="text" class="form-control" name="nombre">
        <p></p>
        @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <label class="form-label">Apellido</label>
        <p></p>
        <input type="text" class="form-control" name="apellido">
        <p></p>
        @error('apellido')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label class="form-label">Posición</label>
        <p></p>
        <input type="text" class="form-control" name="profesion">
        <p></p>
        @error('profesion')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <br />
        <input type="submit" name="submit" value="Agregar Empleado" class="btn btn-outline-primary">
        </form>

    
@endsection