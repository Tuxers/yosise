@extends('master')

@section('styles')
	<link type="text/css" rel="stylesheet" href="{{asset('css/community.css')}}">
@stop

@section('content')
	<!-- Begin Question -->
	<div class="row">
		<div class="col-md-12 question-page">
			<div class="question-item-content col-xs-10">
				<h1 class="question-item-title"><i class="fa fa-{{HTML::ocupationIcon($question->user->ocupation)}}"></i>
					{{$question->title}}
				</h1>
				<h4 class="question-item-asker">
					<small>
						Preguntado por <a href="/profile/{{$user->id}}">{{$user->name}}</a> el {{$question->created_at}}.
					</small>
				</h4>
				<p class="question-item-description">
					{{$question->description}}
				</p>
				<div class="question-item-action-buttons row">
					<div class="question-item-share-buttons col-xs-8">
						<h5 class="social-icons-share-text">Compartir:</h5>
						<img class="social-icon-little" src="{{asset('img/social-linkedin.png')}}">
						<img class="social-icon-little" src="{{asset('img/social-googleplus.png')}}">
						<img class="social-icon-little" src="{{asset('img/social-twitter.png')}}">
						<img class="social-icon-little" src="{{asset('img/social-facebook.png')}}">
						</div>
					<div class="question-action-buttons col-xs-4">
						<a href="javascript:(0)" class="btn btn-success">Seguir Pregunta</a>
						<a href="#question-answer-textbox" class="btn btn-primary">Responder</a>
					</div>
				</div>
			</div>
			<div class="question-item-vote col-xs-2">
				<div class="row"><a href="javascript:(0)"> <i class="fa fa-caret-up fa-5x"></i> </a></div>
				<div class="row"><h3 class="vote-count">{{$question->up_votes}}</h3></div>
				<div class="row"><a href="javascript:(0)"> <i class="fa fa-caret-down fa-5x"></i> </a></div>
			</div>
		</div>
    </div>
	<!-- End Question -->

	<div class="row community-content">
		<!-- Begin Questions Container -->
		<div class="col-md-8 answers-container">
			@foreach($answers as $answer)
				<div class="answer-item row">
					<div class="answer-item-content col-xs-10">
						<img class="answer-member-icon" src="{{asset('img/members/sergey.png')}}">
						<h4 class="answer-item-title">
							<a href="/profile/{{$answer->user->id}}">{{$answer->user->name}}</a><i class="fa fa-{{HTML::ocupationIcon($answer->user->ocupation)}}"></i>
						</h4>
						<h4><small>({{$answer->user->ocupation}})</small></h4>
						<p class="question-item-description">
							{{$answer->content}}
						</p>
						<div class="answer-item-action-buttons row">
							<div class="answer-item-share-buttons col-xs-8">
								<h5 class="social-icons-share-text">Compartir:</h5>
								<img class="social-icon-little" src="{{asset('img/social-linkedin.png')}}">
								<img class="social-icon-little" src="{{asset('img/social-googleplus.png')}}">
								<img class="social-icon-little" src="{{asset('img/social-facebook.png')}}">
								<img class="social-icon-little" src="{{asset('img/social-twitter.png')}}">
							</div>
						</div>
					</div>
					<div class="answer-item-vote col-xs-2">
						<div class="row"><a> <i class="fa fa-caret-up fa-5x"></i> </a></div>
						<div class="row"><h3 class="vote-count">{{$answer->up_votes}}</h3></div>
						<div class="row"><a> <i class="fa fa-caret-down fa-5x"></i> </a></div>
					</div>
				</div>
			@endforeach
			<div class="question-answer-textbox">
				<textarea class="answer-textbox form-control" rows="5"></textarea>
			</div>
			<div class="question-send-answer" id="question-answer-textbox">
				<a href="javascript:(0)" class="btn btn-info">Enviar respuesta</a>
			</div>
		</div>
		<!-- End Questions Container -->

		<!-- Begin Community Left column -->
		<div class="col-md-4">
			<div class="question-followers row">
				<div class="question-followers-list">
					<h4>Seguidores de la pregunta (25)</h4>
					<img class="community-member-icon" src="{{asset('img/members/jhtan.png')}}">
					<img class="community-member-icon" src="{{asset('img/members/sergey.png')}}">
					<img class="community-member-icon" src="{{asset('img/members/verok.png')}}">
				</div>
			</div>
		<div class="question-similar-questions row">
			<h4>Preguntas similares</h4>
			<div class="similar-question-item">
				<a href="javascript:(0)"><h5>&iquest;En qu&eacute; consiste la carrera de Ingienear&iacute;a de Sistemas?</h5></a>
			</div>
			<div class="similar-question-item">
				<a href="javascript:(0)"><h5>&iquest;Qu&eacute; cosas nuevas aprender&eacute; estudiando Inform&aacute;tica?</h5></a>
			</div>
        </div>
    </div>
<!-- End Community Left column -->
	</div>
@stop
