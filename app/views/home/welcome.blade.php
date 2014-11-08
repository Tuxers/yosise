<!DOCTYPE html>
<html lang="en">
<head>
	<title>Yo Si S&eacute;!!</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Sublime Stunning free HTML5/CSS3 website template"/>
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/sublime/css/reset.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/sublime/css/fancybox-thumbs.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/sublime/css/fancybox-buttons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/sublime/css/fancybox.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/sublime/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/sublime/css/main.css')}}">

    <script type="text/javascript" src="{{asset('vendor/sublime/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/sublime/js/fancybox.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/sublime/js/fancybox-buttons.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/sublime/js/fancybox-media.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/sublime/js/fancybox-thumbs.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/sublime/js/wow.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/sublime/js/main.js')}}"></script>
</head>
<body>

	<section class="billboard light">
		<header class="wrapper light">
			<a href="#"><img class="logo" src="{{asset('vendor/sublime/img/yosise_logo.png')}}" alt=""/></a>
			<nav>
				<ul>
					<li><a href="/login">Login</a></li>
					<li><a href="/register">Registrarse</a></li>
				</ul>
			</nav>
		</header>

		<div class="caption light animated wow fadeInDown clearfix">
			<h1>Yo Si S&eacute;!!</h1>
			<p>Una plataforma de preguntas y respuestas</p>
			<hr>
		</div>
		<div class="shadow"></div>
	</section><!--  End billboard  -->


	<section class="services wrapper">
		<ul class="clearfix">
			<li class="animated wow fadeInDown">
				<img class="icon" src="{{asset('vendor/sublime/img/blackboard.png')}}" alt=""/>
				<span class="separator"></span>
				<h2>Estudiantes</h2>
				<p>No se que carrera estudiar.</p>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".2s">
				<img class="icon" src="{{asset('vendor/sublime/img/mortarboard.png')}}" alt=""/>
				<span class="separator"></span>
				<h2>Universitarios</h2>
				<p>Ahora estoy en una carrera pero no estoy seguro si voy a continuar.</p>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".4s">
				<img class="icon" src="{{asset('vendor/sublime/img/science.png')}}" alt=""/>
				<span class="separator"></span>
				<h2>Profesionales</h2>
				<p>Termine una carrera profesional!!!.</p>
			</li>
		</ul>
	</section><!--  End services  -->


	<section class="video">
		<img src="{{asset('vendor/sublime/img/yosise_logo_b.png')}}" alt="" class="video_logo animated wow fadeInDown"/>
		<h3 class="animated wow fadeInDown">Quienes somos & que hacemos</h3>
		<a href="http://www.youtube.com/embed/cBJyo0tgLnw" id="play_btn" class="fancybox animated wow flipInX" data-wow-duration="2s"></a>
	</section><!--  End video  -->


	<section class="testimonials wrapper">
		<div class="title animated wow fadeIn">
			<h2>ACERCA DE NOSOTROS</h2>
			<h3>Un grupo de amigos</h3>
			<hr class="separator"/>
		</div>

		<ul class="clearfix">
			<li class="animated wow fadeInDown"  data-wow-delay=".2s">
				<p><img src="{{asset('vendor/sublime/img/quotes.png')}}" alt="" class="quotes"/>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam sunt in culpa officia deserunt mollit anim laborum sint occaecat.
				<span class="triangle"></span>
				</p>
				<div class="client">
					<img src="{{asset('img/members/jhtan.png')}}" class="avatar"/>
					<div class="client_details">
						<h4>Jhonatan Castro</h4>
						<h5>Developer</h5>
					</div>
				</div>
			</li>
			<li class="animated wow fadeInDown">
				<p><img src="{{asset('vendor/sublime/img/quotes.png')}}" alt="" class="quotes"/>Dolor sit amet consectetur isicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud laboris.
				<span class="triangle"></span>
				</p>
				<div class="client">
					<img src="{{asset('img/members/verok.png')}}" class="avatar"/>
					<div class="client_details">
						<h4>Veronica Aruquipa</h4>
						<h5>Developer</h5>
					</div>
				</div>
			</li>
			<li class="animated wow fadeInDown"  data-wow-delay=".4s">
				<p><img src="{{asset('vendor/sublime/img/quotes.png')}}" alt="" class="quotes"/>Aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse slum dolore eu fugiat nulla pariatursint occaecat.
				<span class="triangle"></span>
				</p>
				<div class="client">
					<img src="{{asset('img/members/sergey.png')}}" class="avatar"/>
					<div class="client_details">
						<h4>Sergio Guillen</h4>
						<h5>Developer</h5>
					</div>
				</div>
			</li>
		</ul>
	</section><!--  End testimonials  -->


	<footer>
		<div class="wrapper">
			<div class="rights">
				<p>© Sublime. All Rights Reserved 2014 - More Free Templates at <a href="http://pixelhint.com" target="_blank">Pixelhint.com</a></p>
			</div>

			<nav>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>		
	</footer><!--  End footer  -->
    <script src='../ga.js'></script>
</body>
</html>