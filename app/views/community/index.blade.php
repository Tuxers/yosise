@extends('master')

@section('styles')
<link type="text/css" rel="stylesheet" href="{{asset('css/community.css')}}">
@stop

@section('content')
{{-- Important, saves the communityid --}}
<input type="hidden" id="communityId" value="{{$model->id}}">

<!-- Begin Banner -->
<div class="row">
  <div class="col-md-12">
    <h1 class="community-title">
      {{$model->name}}
    </h1>

    <div class="community-banner">
      <img src="{{asset('img/banner.jpg')}}" class="img-responsive">

      <div class="community-action-buttons">
          @if($is_follower)
            <a style="display: none" id="follow" class="btn btn-primary follow-btn">Seguir</a>
            <a id="unfollow" class="btn btn-primary follow-btn">Siguiendo</a>
          @else
            <a  id="follow" class="btn btn-primary follow-btn">Seguir</a>
            <a  style="display: none" id="unfollow" class="btn btn-primary follow-btn">Siguiendo</a>
          @endif
        <button type="button" class="btn btn-success ask-btn" data-toggle="modal" data-target="#questionModal">
          Preguntar
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End Banner -->

<div class="row community-content">
  <!-- Begin Questions Container -->
  <div class="col-md-8 question-container" id="question-container">

  </div>
  <!-- End Questions Container -->

  <!-- Begin Community Left column -->
  <div class="col-md-4">
    <h4 id="members">Miembros ({{$model->members}})</h4>
    <div class="community-members-list" id="member-list">
    @foreach($followers as $follower)
      <a href="/profile/{{$follower->id}}">
      <img class="community-member-icon" title="{{$follower->name}}"
        src="/img/members/jhtan.png">
      </a>
    @endforeach
    </div>
  </div>
  <!-- End Community Left column -->

  <!-- Begin Question Form -->
  <div class="modal fade" id="questionModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          <h4 class="modal-title">Hacer Pregunta</h4>
        </div>
        {{Form::open(['url'=>'/question', 'method'=>'post'])}}
        <div class="modal-body">
          <input type="hidden" name="communityId" value="{{$model->id}}">
          <div class="form-group">
            <label for="title" class="col-lg-3 control-label">T&iacute;tulo</label>
            <div class="col-lg-9">
              <input class="form-control" type="text" name="title" placeholder="Pregunta" autocomplete="off"><br>
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="col-lg-3 control-label">Descripci&oacute;n</label>
            <div class="col-lg-9">
              <textarea class="form-control" type="text" name="description" autocomplete="off">
              </textarea>
              <br>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success ask-btn" value="Preguntar">
        </div>
        {{Form::close()}}
      </div>
    </div>
  </div>
  <!-- End Question Form -->
</div>
@stop

@section('templates')
<script type="application/template" id="member-tpl">
  <a href="/profile/<%= followerId %>">
    <img class="community-member-icon" title="<%= followerName %>"
      src="/img/members/jhtan.png">
  </a>
</script>
<script type="application/template" id="question-tpl">
<div class="question-item row">
  <div class="question-item-content col-xs-10">
    <h3 class="question-item-title">
      <i class="fa <%= icon %>"></i>&iquest;
      <a href="/question/<%= questionId %>"><%= questionTitle %></a></h3>
    <h4 class="question-item-asker">
      <small>Preguntado por <a href="/profile/<%= authorId %>">
        <%= authorName %></a> el <%= questionDate %>.</small></h4>
    <p class="question-item-description">
      <%= questionDescription %>
    </p>
    <div class="question-item-action-buttons row">
      <div class="question-item-share-buttons col-xs-8">
        <h5 class="social-icons-share-text">Compartir:</h5>
        <img class="social-icon-little" src="/img/social-linkedin.png">
        <img class="social-icon-little" src="/img/social-googleplus.png">
        <img class="social-icon-little" src="/img/social-twitter.png">
        <img class="social-icon-little" src="/img/social-facebook.png">
      </div>
      <div class="question-item-answer-button col-xs-4"><a href="/question/<%= questionId %>" class="btn btn-primary btn-sm">Responder</a></div>
    </div>
  </div>
  <div class="question-item-vote col-xs-2">
    <div class="row"><a> <i class="fa fa-caret-up fa-5x"></i> </a></div>
    <div class="row"><h3 class="vote-count"><%= votes %></h3></div>
    <div class="row"><a> <i class="fa fa-caret-down fa-5x"></i> </a></div>
  </div>
</div>
</script>
@stop

@section('scripts')
<script src="{{asset('vendor/underscore/underscore.min.js')}}"></script>
<script src="{{asset('js/community.js')}}"></script>
@stop
