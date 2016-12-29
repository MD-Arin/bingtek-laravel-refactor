@extends('layouts.master')

@section('title')
 Products and Services
@endsection

@section('ps-active')
  active
@endsection
@section('second-active')
  active
@endsection

@section('content')
<div class="container-fluid">
  <div class="jumbotron">
    <h1 class="text-center">Networking</h1>
    <h3 class="text-center">Diversified Networking Solutions</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
    </p>
  </div>

  <div class="row">
    <hr>
  </div>
  <div class="row  carousel-height">
    <div class="cover-image" style="background: url('{{ URL::to('img/placeholders/placeholder-2.jpg') }}'); height: 100vh; width: 100%;">
      <div class="text-left">
        <ul class="list-unstyled">
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        </ul>
      </div>
      <div class="text-center" style="padding-top: 5%;">
        <ul class="list-unstyled">
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        </ul>
      </div>
      <div class="text-right" style="padding-top: 5%;">
        <ul class="list-unstyled">
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        </ul>
      </div>
    </div>
  </div>
    <hr>
    <div class="container">
      <p class="text-info text-center jumbotron">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
      </p>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h3 class="text-center">Interdepartmental Networking</h3>
        <hr>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
        </p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="{{ URL::to('img/placeholders/placeholder-0.jpg') }}" class="img-thumbnail"/>
      </div>
    </div>

  <hr>
  <div class="container-fluid">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 vertical-line-right">
      <div class="row">
        <h3 class="text-center">Office Networking</h3>
        <hr>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
        </p>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  vertical-line-left">
      <div class="row">
        <h3 class="text-center">Building Networking</h3>
        <hr>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
        </p>
      </div>
    </div>
  </div>
</div>
<hr>

@endsection
