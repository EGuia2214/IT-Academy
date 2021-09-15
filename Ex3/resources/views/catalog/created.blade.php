@extends('../template')

@section('title', 'Catalog')

@section('content')
    <h1>Su registro se ha creado correctamente</h1>

    <button type="button" class="btn btn-light"><a href="{{ route('catalog.index') }}">Volver al catálogo</a></button>
    
@endsection