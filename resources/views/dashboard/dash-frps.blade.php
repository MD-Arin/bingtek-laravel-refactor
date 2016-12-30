@extends('layouts.dash')

@section('title', 'Edit Products and Services')

@section('edit-frps-active', 'active')

@section('dash-content')
  <div class="container-fluid">
    <div class="row carousel-height">
      <div class="cover-image carousel-height" style="background: url('{{ URL::to('img/placeholders/placeholder-1.jpg') }}'); width: 100%;">
        <div class="jumbotron text-right" style="padding-top: 10%;">
          <h1>Office Partitioning</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
          </p>
        </div>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="{{ URL::to('img/placeholders/placeholder-2.jpg') }}" class="img-thumbnail" />
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h4>Smart and Organized</h4>
        <p>
          Whether closed or open offices, our office designs are unmatched.
        </p>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h4>All Office Types</h4>
        <p>
          From big offices to small offices, we offer the best office solutions for all types of offices
        </p>
        <ul>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</li>
        </ul>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="{{ URL::to('img/placeholders/placeholder-0.jpg') }}" class="img-thumbnail" />
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="container">
        <div class="jumbotron">
          <h4 class="text-center">Comfortable Work Places</h4>
          <h5 class="text-center">Making offices a home away from home</h5>
          <hr>
          <p class="text-center">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
          </p>
        </div>
      </div>
    </div>
    <hr>

    <div class="row carousel-height">
      <div class="cover-image carousel-height" style="background: url('{{ URL::to('img/placeholders/placeholder-0.jpg') }}'); width: 100%;">
        <div class="text-left" style="padding-top: 15%">
          <h2>Offices Designed For Interaction</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
          </p>
        </div>
      </div>
    </div>
    <hr>
    <div class="row carousel-height">
      <div class="cover-image carousel-height" style="background: url('{{ URL::to('img/placeholders/placeholder-1.jpg') }}'); width: 100%;">
        <div class="text-center" style="padding-top: 15%">
          <h2>Luxury Offices</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
          </p>
        </div>
      </div>
    </div>
    <hr>
  </div>
@endsection
