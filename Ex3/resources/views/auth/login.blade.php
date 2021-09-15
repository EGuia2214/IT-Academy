@extends('template')

@section('title', 'Login')

@section('content')
    <h1>Login Usuari</h1>
    <form action="{{ route('login.access')}}" method="post">

        @csrf

        <div class="form-group">
            <label for="user">Usuario:</label>
            <input type="text" class="form-control" id="user" name="user" value="{{old('user')}}">
            @error('user')  
            <br>
            <small class="alert alert-danger">*{{$message}}</small>
            <br>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="pass">Contraseña:</label>
            <input type="password" class="form-control" id="pass" name="pass" value="{{old('pass')}}">
            @error('pass')  
            <br>
            <small class="alert alert-danger">*{{$message}}</small>
            <br>
            @enderror
          </div>
          
      
          <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    
@endsection