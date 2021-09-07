@extends('layout')

@section('content')
<h1> Contact </h1>
<form>
  <div class="form-group">
    <label for="Name">Nombre:</label>
    <input type="text" class="form-control" id="name" name="user_name">
  </div>
  
  <div class="form-group">
    <label for="email">Correo electrónico:</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  
  <div class="form-group">
    <label for="msg">Mensaje:</label>
    <textarea class="form-control" id="msg" name="user_message"></textarea></p>
  </div>  

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection