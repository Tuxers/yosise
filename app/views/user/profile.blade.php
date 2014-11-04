@extends('master')

@section('content')
<h1>{{$model->name}}</h1>
<h4>{{{$model->bio}}}</h4>
<span>
  @if($model->ocupation === 'stu')
    {{{$model->school}}}
  @elseif($model->ocupation === 'uni')
    {{{$model->college}}} - {{{$model->career}}}
  @elseif($model->ocupation === 'pro')
    {{{$model->college}}} - {{{$model->career}}}<br>
    Trabaja en: {{{$model->organization}}}
  @endif
</span>

<h2>Preguntas</h2>
<ul>
@foreach($questions as $question)
  <li>{{$question->id}} - {{$question->title}}</li>
@endforeach
</ul>
<h2>Respuestas</h2>
<ul>
@foreach($answers as $answer)
  <li>{{$answer->id}} - {{$answer->content}} ({{$answer->question->title}})</li>
@endforeach
</ul>
@stop

@section('scripts')
<script src="{{asset('js/profile.js')}}"></script>
@stop
