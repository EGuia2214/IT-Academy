@extends('../template')

@section('title', 'Create')

@section('content')
    <h1>Afegir llibre</h1>
    <form action="{{ route('catalog.store') }}" method="post">

      @csrf

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo')}}">
            @error('titulo')  
            <br>
            <small class="alert alert-danger">*{{$message}}</small>
            <br>
            @enderror

          </div>
          
          <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{old('autor')}}">
            @error('autor')  
            <br>
            <small class="alert alert-danger">*{{$message}}</small>
            <br>
            @enderror
          </div>

          <div class="form-group">
            <label for="publicacion">Publicación:</label>
            <input type="text" class="form-control" id="publicacion" name="publicacion" value="{{old('publicacion')}}">
            @error('publicacion')  
            <br>
            <small class="alert alert-danger">*{{$message}}</small>
            <br>
            @enderror
          </div>
          
      
          <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    
@endsection