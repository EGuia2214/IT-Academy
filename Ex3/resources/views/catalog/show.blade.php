@extends('../template')

@section('title', 'Vista detall')

@section('content')
  <h1>Vista detalle libro {{$id}}</h1>
  <p>Título: libro {{$id}}</p>
  <p>Autor: Autor libro {{$id}}</p>
  <p>Publicación: Año de publicación - Editorial - Libro {{$id}}</p>
    
@endsection

