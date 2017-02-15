<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('assets/materialize/dist/css/materialize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/master.css') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- fav icon -->

    <link rel="shortcut icon" href="{{ asset('gita.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('gita.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('gita.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('gita.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('gita.png') }}">
  @yield('styles')
</head>

<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{ route('home') }}" class="brand-logo">Gita</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('allArtists') }}">Artists</a></li>
        <li><a href="#">Songs </a></li>
        <li><a href="#">Genres </a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ route('allArtists') }}">Artists</a></li>
        <li><a href="#">Songs </a></li>
        <li><a href="#">Genres </a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
