@extends('layouts.dash')

@section('title', 'Edit Products and Services')

@section('edit-tps-active', 'active')

@section('dash-content')

  <div class="container-fluid">
    <div class="row">
      <div class="container">
        <hr>
        <h2 class="list-group-item-heading text-center">Software Development</h2>
        <hr>
        <div class="jumbotron">
          <p class="list-group-item-text text-center">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <hr class="underline">
      <h2 class="text-center">Customized Software Solutions</h2>
      <hr class="underline">
    </div>

    <div class="row vertical-line-left vertical-line-right">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h3>Software made Specifically for you</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          </p>
          <ul class="list-unstyled">
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
          </ul>
          <img src="{{ URL::to('img/placeholders/placeholder-2.jpg') }}" class="img-thumbnail" />
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="{{ URL::to('img/placeholders/placeholder-0.jpg') }}" class="img-thumbnail" />
          <h3>A wide range of softwares</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          </p>
          <ul class="list-unstyled">
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
          </ul>
      </div>
    </div>

    <div class="row">
      <hr class="underline">
      <h3 class="text-center">Software Maintenance</h3>
      <hr class="underline">
    </div>

    <div class="row vertical-line-left vertical-line-right">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <img src="{{ URL::to('img/placeholders/placeholder-0.jpg') }}" class="img-thumbnail" />
          <h3>Quick and Easy Software Installations</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
          </p>
          <ol class="list-unstyled">
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
          </ol>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h3>The Latest Software Upgrades</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
          </p>
          <ol class="list-unstyled">
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
          </ol>
          <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}" class="img-thumbnail" />
      </div>
    </div>

    <div class="row">
      <div class="jumbotron">
        <hr class="underline">
        <h3 class="text-center">Diverse Software Solutions</h3>
        <hr class="underline">
        <p class="text-center">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
        </p>
        <ol class="list-unstyled text-center">
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
        </ol>
      </div>
    </div>
  </div>
@endsection
