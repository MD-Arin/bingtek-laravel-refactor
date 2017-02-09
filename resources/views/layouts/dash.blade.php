<html lang="en">
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::to('css/custom.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}" media="screen">
  </head>
  <body>
    @include('includes.nav')
    <div class="container-fluid">
      <div class="row">
        <div class="cols-xs-2 col-sm-2 col-md-2 col-lg-2 sidebar nav-sidebar-fixed margin-top">
          @include('includes.dash-nav')
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 main col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
          @yield('dash-content')
          @include('includes.footer')
      </div>
    </div>
    </div>
  </body>
  <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('js/bootstrap.js') }}"></script>
</html>
