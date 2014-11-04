@extends('master')

@section('content')

@if(Auth::check())
Sesión iniciada como <b>{{Auth::user()->name}}</b>
{{Form::open(['url'=>'/logout', 'method'=>'post'])}}
<input type="submit" value="Log out">
{{Form::close()}}
@else
<a href="/login" title="">Login</a>
@endif
@stop
