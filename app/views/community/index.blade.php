@extends('master')

@section('content')
<input type="hidden" id="communityId" value="{{$model->id}}">
community {{$model->name}} --- {{$model->members}}

<br>

@if(!$is_follower)
  <button type="button" id="follow">Follow</button>
@endif
<ul>
@foreach($followers as $follower)
  <li>{{$follower->name}}</li>
@endforeach
</ul>

@stop

@section('scripts')
<script src="{{asset('js/community.js')}}"></script>
@stop
