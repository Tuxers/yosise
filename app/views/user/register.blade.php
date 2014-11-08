@extends('master')

@section('styles')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@stop

@section('content')
@if(Session::has('error'))
<div>
  {{{Session::get('error')}}}
</div>
@endif
<div class="login-container">
  <div class="well">
  {{Form::open(['url'=>'register', 'method'=>'post', 'class'=>'form-horizontal'])}}
      <fieldset>
        <legend>Registrar Usuario</legend>
        <div class="form-group">
          <label for="inputUsername" class="col-lg-3 control-label">Usuario</label>
          <div class="col-lg-9">
            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Nombre de Usuario">
          </div>
        </div>
        <div class="form-group">
          <label for="inputName" class="col-lg-3 control-label">Nombre</label>
          <div class="col-lg-9">
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Nombres y Apellidos">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-3 control-label">Correo</label>
          <div class="col-lg-9">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Correo electr&oacute;nico">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-3 control-label">Contrase&ncaron;a</label>
          <div class="col-lg-9">
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Contrase&ncaron;a">
          </div>
        </div>
        <div class="form-group">
          <label for="inputBio" class="col-lg-3 control-label">Biograf&iacute;a</label>
          <div class="col-lg-9">
            <input type="text" name="bio" class="form-control" id="inputBio" placeholder="Biograf&iacute;a">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Ocupac&iacute;on</label>
          <br>
          <div class="col-lg-9">
            <div class="radio">
              <label>
                <input type="radio" name="ocupation" id="optionsRadios1" value="stu" checked>
                Colegial
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="ocupation" id="optionsRadios2" value="uni">
                Universitario
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="ocupation" id="optionsRadios3" value="pro">
                Profesional
              </label>
            </div>
          </div>
        </div>
        <div class="form-group" id="school">
          <label for="inputSchool" class="col-lg-3 control-label">Colegio</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" name="school" id="inputSchool" placeholder="Colegio">
          </div>
        </div>
        <div class="form-group" style="display: none" id="college">
          <label for="inputCollege" class="col-lg-3 control-label">Universidad</label>
          <div class="col-lg-9">
            <select class="form-control" name="college" id="inputCollege">
              @foreach($colleges as $college)
                <option value="{{$college->id}}">{{$college->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group" style="display: none" id="career">
          <label for="inputCarrer" class="col-lg-3 control-label">Carrera</label>
          <div class="col-lg-9">
            <select class="form-control" id="inputCarrer" name="career">
              @foreach($areas as $area)
                <option value="{{$area->id}}">{{$area->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group" style="display: none" id="organization">
          <label for="inputOrganization" class="col-lg-3 control-label">Profes&iacute;on</label>
          <div class="col-lg-9">
            <input type="text" name="organization" class="form-control" id="inputOrganization" placeholder="Profes&iacute;on">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-3 col-lg-offset-9">
            <p><input type="submit" class="btn btn-success" value="Registrarse"></p>
          </div>
        </div>
      </fieldset>
      {{Form::close()}}
  </div>
</div>
@stop

@section('scripts')
<script src="{{asset('js/register.js')}}"></script>
@stop
