@extends('master')

@section('content')
  <h1>Login</h1>
  <hr>

  {{Form::open(['url'=>'/login'])}}
  Nombre de Usuario:<br>
  <input type="text" name="username" placeholder="foo_bar" autocomplete="off"><br>
  Password:<br>
  <input type="password" name="password" autocomplete="off"><br>
  <input type="submit" value="Iniciar Sesión">
  {{Form::close()}}
@stop
