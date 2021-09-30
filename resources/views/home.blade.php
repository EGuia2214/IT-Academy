@extends('template')

@section('title', 'Inicio')

@section('content')
    <h1>Empleados - Pantalla Principal</h1>

    <button type="button" class="btn btn-info"><a href="{{ url("/empleados") }}" role="button">Ver listado de empleados</a></button>
    <button type="button" class="btn btn-info"><a href="{{ url("/empleados/create") }}" role="button">Crear nuevo empleado</a></button>
    
@endsection