@extends('master')

@section('content')
<h1>register</h1>
<hr>
@if(Session::has('error'))
<div>
  {{{Session::get('error')}}}
</div>
@endif
{{Form::open(['url'=>'register', 'method'=>'post'])}}
  Nombre: <br>
  <input type="text" name="name" placeholder="ej. Juan Perez" autocomplete="off"><br>
  Username:<br>
  <input type="text" name="username" placeholder="ej. patito123" autocomplete="off"><br>
  Email:<br>
  <input type="email" name="email" placeholder="ej. pato@gmail.com" autocomplete="off"><br>
  Password:<br>
  <input type="password" name="password" autocomplete="off"><br>
  Bio:<br>
  <input type="text" name="bio" autocomplete="off"><br>
  <label><input type="radio" name="ocupation" value="stu" checked>Colegial</label>
  <label><input type="radio" name="ocupation" value="uni">Universitario</label>
  <label><input type="radio" name="ocupation" value="pro">Profesional</label><br>
  <div id="school">
    Colegio:<br>
    <input type="text" name="school" autocomplete="off" placeholder="Cual es tu colegio?">
  </div>
  <div id="college" style="display: none">
    Universidad:<br>
    <select name="college">
      @foreach($colleges as $college)
        <option value="{{$college->id}}">{{$college->name}}</option>
      @endforeach
    </select>
  </div>
  <div id="career" style="display: none">
    Carrera:<br>
    <select name="career">
      @foreach($areas as $area)
        <option value="{{$area->id}}">{{$area->name}}</option>
      @endforeach
    </select>
  </div>
  <div id="organization" style="display: none">
    Empresa:<br>
    <input type="text" name="organization" autocomplete="off" placeholder="Donde trabajas?">
  </div>
  <br>
  <input type="submit" value="Registrarse">
{{Form::close()}}
@stop

@section('scripts')
<script src="{{asset('js/register.js')}}"></script>
@stop
