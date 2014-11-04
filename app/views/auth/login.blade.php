@extends('master')

@section('content')
  <h1>Login</h1>
  <hr>

  {{Form::open(['url'=>'/login'])}}
  Nombre de Usuario:<br>
  <input type="text" name="username" placeholder="foo_bar" autocomplete="off" class="form-control"><br>
  Password:<br>
  <input type="password" name="password" autocomplete="off" class="form-control"><br>
  <input type="submit" class="btn btn-primary btn-sm" value="Iniciar Sesión">
  {{Form::close()}}
@stop
