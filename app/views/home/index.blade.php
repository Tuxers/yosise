@extends('master')

@section('content')

@if(Auth::check())
Sesión iniciada como <b>{{Auth::user()->name}}</b>
@else
<a href="/login" title="">Login</a>
@endif
@stop
