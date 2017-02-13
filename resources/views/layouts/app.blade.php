<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tambua') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link href="../../css/toolkit-inverse.css" rel="stylesheet">
    <link href="../../css/application.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">

    <style>
     /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>
    
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="ts">
    <nav class="ci ou g">
    <div class="ft ui">
      <div class="oj">
        <button type="button" class="om collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="ct">Toggle navigation</span>
          <span class="on"></span>
          <span class="on"></span>
          <span class="on"></span>
        </button>
        
        <a class="ol tu" href="/">
          <span class="bv act tt"></span>
          {{ config('app.name', 'Tambua') }}
        </a>
      
      </div>
      <div id="navbar" class="ok collapse">
        <ul class="nav navbar-nav">
          <li><a href="posts">Blog</a></li>
          <li><a href="admin">Admin</a></li>
        </ul>
        <div class="fa oo ny">
          <div class="aol">
                <ul class="nav navbar-nav aol">
                    <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                 </ul>
            </div>
        </div>
    </div>
  </nav>
  
  <div class="ft ui">
        <!--Create top spacing-->
        <ul class="nav tr aky akt" role="tablist"></ul>
        @yield('content')  
  </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
