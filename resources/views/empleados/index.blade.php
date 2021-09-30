@extends('template')

@section('title', 'Listar empleados')

@section('content')
    <h1>Empleados IT Academy</h1>
    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th class="text-center" scope="col">Nombre</th>
                <th class="text-center" scope="col">Apellido</th>
                <th class="text-center" scope="col">Posición</th>
                <th class="text-center" colspan="3" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>    
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>
                <td class="text-center">{{$empleado->nombre}}</td>
                <td class="text-center">{{$empleado->apellido}}</td>
                <td class="text-center">{{$empleado->profesion}}</td>
                <td class="text-right"><a class="btn btn-outline-dark" href="{{route('empleados.show',$empleado->id)}}">Mostrar</a><br></td>
                <td class="text-right"><a class="btn btn-outline-primary" href="{{route('empleados.edit',$empleado->id)}}">Editar</a><br></td>
                <td class="text-right">
                    <form action="{{route('empleados.destroy',$empleado->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger">Eliminar</button>
                    </form>
                </td>
            </tr>    
            @endforeach
        </tbody>    
        
    </table>

    {{$empleados->links()}}

    <a class="btn btn-info" href="{{(route('empleados.create'))}}">Dar de alta empleado</a>
    
@endsection