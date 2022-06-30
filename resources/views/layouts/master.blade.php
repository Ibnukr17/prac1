<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('themes/assets/ico/favicon.ico')}}">
    <title>Bootstrappage.com free templates</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('themes/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="{{asset('themes/assets/css/carousel.css')}}" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    {{-- header --}}
    @section('header')
        @include('layouts.partials.header')
    @show

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @section('footer')
        @include('layouts.partials.footer')
    @show
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{asset('themes/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('themes/assets/js/holder.js')}}"></script>
  </body>
</html>
