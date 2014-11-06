@extends('master')

@section('styles')
<link type="text/css" rel="stylesheet" href="{{asset('css/profile.css')}}">
@stop

@section('content')
<!-- Begin Body -->
<div class="well profile">
  <div class="col-sm-12">
    <div class="col-xs-12 col-sm-4 text-center">
      <figure>
        <img width="200" height="200" src="/img/members/{{$model->picture_url}}" alt="" class="img-circle img-responsive">
      </figure>
    </div>
    <div class="col-xs-12 col-sm-8">
      <h2>{{$model->name}}</h2>
      <p>
        <strong style="position: inherit">Bio: </strong>
        {{{$model->bio}}} &nbsp;
        <i class="fa fa-{{HTML::ocupationIcon($model->ocupation)}}"></i>
      </p>
      @if($model->ocupation === 'stu')
      <p><strong>Colegio: </strong> {{{$model->school}}}</p>
      @elseif ($model->ocupation === 'uni')
      <p><strong>Universidad: </strong> {{{$model->college}}}</p>
      <p><strong>Carrera: </strong> {{{$model->career}}}</p>
      @elseif ($model->ocupation === 'pro')
      <p><strong>Universidad: </strong> {{{$model->college}}}</p>
      <p><strong>Carrera: </strong> {{{$model->career}}}</p>
      <p><strong>Empresa: </strong> {{{$model->organization}}}</p>
      @endif
    </div>
  </div>
  <div class="interested-tags">
    <p><strong>Intereses: </strong></p>
    <span class="label label-primary">Algoritmos</span>
    <span class="label label-primary">Matemáticas</span>
    <span class="label label-primary">Estadística</span>
  </div>
</div>
<!-- Begin Q&A list -->
<div>
  <div class="col-md-12 question-answer-container">
    <h2>Preguntas Realizadas:</h2>
    @foreach($questions as $question)
    <div class="well row">
      <a href="/question/{{$question->id}}">
        <h3 class="question-item-title">
          <i class="fa fa-{{HTML::ocupationIcon($model->ocupation)}}"></i>&iquest;
          {{$question->title}}
        </h3>
      </a>
      <h4 class="question-item-asker"><small>Preguntado por <a href="/profile/{{$model->id}}">{{$model->name}}</a> el {{$question->created_at}}.</small></h4>
      <p class="question-item-description">
        {{{$question->description}}}
      </p>
    </div>
    @endforeach
  </div>
</div>

<div class="profile community-content">
  <!-- Begin Questions Container -->
  <div class="col-md-12 question-answer-container">
    <h2>Respuestas Realizadas</h2>
    @foreach($answers as $answer)

    <div class="well row">
      <div class="answer-item-content col-xs-12">
        <img class="answer-member-icon" src="/img/members/{{$model->picture_url}}">
        <h4 class="answer-item-title">
          <a href="/profile/{{$model->id}}">
            {{{$model->name}}}
          </a> <i class="fa fa-{{HTML::ocupationIcon($model->ocupation)}}"></i>
        </h4>
        <h4><small>({{$model->bio}})</small></h4>
        <p><i>{{$answer->question->title}}</i></p>
        <p class="question-item-description">
          {{$answer->content}}
        </p>
      </div>
    </div>
    @endforeach

  </div>
  <!-- End Questions Container -->
</div>
<!-- End Q&A list -->
<!-- End Body -->
@stop

@section('scripts')
<script src="{{asset('js/profile.js')}}"></script>
@stop
