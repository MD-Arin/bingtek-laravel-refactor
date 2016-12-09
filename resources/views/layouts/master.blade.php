<html lang="en">
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::to('css/custom.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::to('fonts/*')}}" media="screen">
  </head>
  <body>
    @include('includes.nav')
    <div class="container">
      @yield('content')
    </div>
    @include('includes.footer')
  </body>
  <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('js/bootstrap.js') }}"></script>
</html>
