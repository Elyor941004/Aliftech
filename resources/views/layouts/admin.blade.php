<!DOCTYPE html>
<html>
<head>
  <title>Aliftech</title>
  <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav" style="text-align: center;">
    <li class="nav-item">
      <a class="nav-link" href="{{route('home')}}">Home</a>
    </li>
  </ul>
</nav>
</header>
<div class="container">
@yield('content')
</div>
</body>
</html>
