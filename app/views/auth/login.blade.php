@extends('master')

@section('content')
<div class="login-container">
  <div class="well">
    {{Form::open(['url'=>'/login', 'class'=>'form-horizontal'])}}
      <fieldset>
        <legend>Iniciar Sesi&oacute;n</legend>
        <div class="form-group">
          <label for="inputUsername" class="col-lg-2 control-label">Usuario</label>
          <div class="col-lg-10">
            <input type="text" name="username" autocomplete="off" class="form-control" id="inputUsername" placeholder="Usuario">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Contrase&ncaron;a</label>
          <div class="col-lg-10">
            <input type="password"  name="password" autocomplete="off" class="form-control" id="inputPassword" placeholder="Contrase&ncaron;a">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <p><input type="submit" class="btn btn-primary login" value="Entrar"></p>
            <!-- <p><a href="#" class="btn btn-info facebook">Facebook</a></p>
            <p><a href="#" class="btn btn-danger google-plus">Google +</a></p>
            <p><a href="#" class="btn btn-success">Registrarse</a></p> -->
          </div>
        </div>
      </fieldset>
    {{Form::close()}}
  </div>
</div>
<!-- End Body -->
@stop

@section('styles')
<link type="text/css" rel="stylesheet" href="{{asset('css/login.css')}}">
@stop
