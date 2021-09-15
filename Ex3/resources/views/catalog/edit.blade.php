@extends('../template')

@section('title', 'Edit')

@section('content')
    <h1>Modificar llibre {{$id}}</h1>
    <form action="#" method="post">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
          </div>
          
          <div class="form-group">
            <label for="autor">Contraseña:</label>
            <input type="text" class="form-control" id="autor" name="autor">
          </div>

          <div class="form-group">
            <label for="publicacion">Contraseña:</label>
            <input type="text" class="form-control" id="publicacion" name="publicacion">
          </div>
          
      
          <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    
@endsection