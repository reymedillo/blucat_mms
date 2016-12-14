<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Ranking System</title>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/ranking.js"></script>
    @yield('js')
    <script type="text/javascript">$(document).ready(function () { $('.btn-back').on('click', function(e) {e.preventDefault(); if(history.length != 0){window.history.back();}var url = $(this).data('target');location.replace(url);});})</script>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'> 
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ranking CSS -->
    <link rel="stylesheet" type="text/css" href="/css/ranking.css">
    @yield('css')
  </head>
  <body>
    <div class="container">
        @include('header')
        @yield('content')
        @include('footer')
    </div>
  </body>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</html>