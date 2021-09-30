@extends('template')

@section('title', 'Empleado')

@section('content')
    <div class="padd">
        
        @if( request()->get('new') )
        <p class="bg-success text-white">Empleado agregado con éxito</p><br>
        <h1>Nuevo Empleado</h1>
        @elseif( request()->get('updt') )
        <p class="bg-success text-white">Empleado actualizado con éxito</p><br>
        <h1>Empleado</h1>  
        @else
        <h1>Empleado</h1>          
        @endif
                 
    <p>Id: {{$empleado->id}}<br>
       Nombre: {{$empleado->nombre}}<br>
       Apellido: {{$empleado->apellido}}<br>
       Profesión: {{$empleado->profesion}}

    <br><br>
    <a class="btn btn-info" href="{{(route('.index'))}}">Volver a listado</a>   
    </div>
    
@endsection