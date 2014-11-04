<!doctype html>
<html>
<head>
  <title>Yo si se!</title>
</head>
<body>
  @if(Auth::check())
    Sesión iniciada como <b>{{Auth::user()->name}}</b>
    {{Form::open(['url'=>'/logout', 'method'=>'post'])}}
    <input type="submit" value="Log out">
    {{Form::close()}}
  @else
    <a href="/login" title="">Login</a> | <a href="/register" title="">Registrarse</a>
  @endif

  <hr>
  @yield('content')

<script src="{{asset('js/jquery.js')}}"></script>
  @yield('scripts')
</body>
</html>
