@extends('../template')

@section('title', 'Edit')

@section('content')
    <h1>Modificar llibre {{$id}}</h1>
    <form action="{{ route('catalog.update') }}" method="post">
      
      @method('put')
      @csrf

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
            @error('titulo')  
            <br>
            <small class="alert alert-danger">*{{$message}}</small>
            <br>
            @enderror
          </div>

          
          <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor">
            @error('autor')  
            <br>
            <small class="alert alert-danger">*{{$message}}</small>
            <br>
            @enderror
          </div>


          <div class="form-group">
            <label for="publicacion">Publicación:</label>
            <input type="text" class="form-control" id="publicacion" name="publicacion">
            @error('publicacion')  
            <br>
            <small class="alert alert-danger">*{{$message}}</small>
            <br>
            @enderror
          </div>

          
      
          <button type="submit" class="btn btn-primary">Actualizar registro</button>

    </form>
    
@endsection