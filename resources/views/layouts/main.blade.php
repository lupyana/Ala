<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/materialize/dist/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('styles')
  </head>

    @include('includes.header')

      @yield('content')

    @include('includes.footer')
      <script src="{{ asset('assets/jquery/dist/jquery.js') }}"></script>
      <script src="{{ asset('assets/materialize/dist/js/materialize.js') }}"></script>
      <script src="{{ asset('js/init.js') }}"></script>
</html>
