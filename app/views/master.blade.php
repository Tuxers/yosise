<html>
<head>
    <title>Comunidad</title>
    <link type="text/css" rel="stylesheet" href="{{asset('vendor/bootswatch/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    @yield('styles')

</head>
<body>

<!-- Begin Header -->
<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="javascript:(0)">YoSiSe</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <form class="navbar-form navbar-left">
            <input type="text" class="form-control col-lg-8" placeholder="Search">
        </form>
        <ul class="nav navbar-nav navbar-right">
          @if(!Auth::check())
          <li><a href="/login" title="">Login</a></li>
          <li><a href="/register" title="">Registrarse</a></li>
          @else
            <li><a href="#">Mis Comunidades</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li>
                      {{Form::open(['url'=>'/logout', 'method'=>'post', 'id'=>'logout'])}}
                      {{Form::close()}}
                      <a href="javascript: document.getElementById('logout').submit()">Cerrar Sesión</a>
                    </li>
                </ul>
            </li>
          @endif
        </ul>
    </div>
</div>
<!-- End Header -->

<div class="wrapper" style="margin: 20px;">
@if($errors->has())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      {{ $error }}<br>
    @endforeach
  </div>
@endif

@yield('content')
</div>
@yield('templates')
<script type="text/javascript" src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
@yield('scripts')
</body>
</html>




{{--<!doctype html>
<html>
<head>
  <title>Yo si se!</title>
</head>
<body>
  @if(Auth::check())
    Sesión iniciada como <b>{{Auth::user()->name}}</b>

  @else
    <a href="/login" title="">Login</a> | <a href="/register" title="">Registrarse</a>
  @endif


<script src="{{asset('js/jquery.js')}}"></script>
  @yield('scripts')
</body>
</html>
--}}
