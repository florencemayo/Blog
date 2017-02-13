<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- CSRF Token-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tambua</title>

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

    <script>
      window.laravel = {!! json_encode([
        'csrfToken'=> csrf_token(),
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
          Tambua
        </a>
      </div>
      <div id="navbar" class="ok collapse">
        <ul class="nav navbar-nav">
          <li><a href="posts">Blog</a></li>
          <li><a href="../light/index.html">About</a></li>
          <li><a href="admin">Admin</a></li>
        </ul>
        <form class="fa oo ny">
          <div class="aol">
            <input class="form-control" type="text" placeholder="Search...">
            <span class="bv adn"></span>
          </div>
        </form>
      </div>
    </div>
  </nav>

  <div class="ft ui">
    <!--Create top spacing-->
    <ul class="nav tr aky akt" role="tablist"></ul>

      @yield('content')  

  </div>

<script src="../../js/jquery.min.js"></script>
<script src="../../js/chart.js"></script>
<script src="../../js/tablesorter.min.js"></script>
<script src="../../js/toolkit.js"></script>
<script src="../../js/application.js"></script>
<script>
  // execute/clear BS loaders for docs
  $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
</script>



</body>
    
@yield('footer')
</html>
