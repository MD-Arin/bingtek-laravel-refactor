@extends('layouts.master')

@section('title')
  Products and Services
@endsection

@section('ps-active')
  active
@endsection
@section('first-active')
  active
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div id="first-ps-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#first-ps-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#first-ps-carousel" data-slide-to="1"></li>
        <li data-target="#first-ps-carousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active carousel-height">
          <div class="row">
            <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}">
            <div class="carousel-caption">
              <h3>Internet Services</h3>
              <h5>Easily connect to the world</h5>
            </div>
          </div>
        </div>
        <div class="item carousel-height">
          <div class="row">
            <img src="{{ URL::to('img/placeholders/placeholder-0.jpg') }}">
            <div class="carousel-caption">
              <h3>Connect to the world Fast</h3>
              <h5>Fast Internet at affordable rates</h5>
            </div>
          </div>
        </div>
        <div class="item carousel-height">
          <div class="row">
            <img src="{{ URL::to('img/placeholders/placeholder-2.jpg') }}">
            <div class="carousel-caption">
              <h3>Have multiple users</h3>
              <h5>Wireless networks that allow multiple users to connect to the internet from the same location.</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#first-ps-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#first-ps-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="row">
    <hr>
  </div>

  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}" class="img-thumbnail"/>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h3>Internet Connectivity</h3>
      <hr>
      <ul>
        <p>
          Setup an internet connection within hours.
          Caught up using data bundles that cost too much?
          Give us a call. At Bingtek we offer fast internet connectivity within hours.
        </p>
        <p>
          We aim to give you fast internet as quickly as possible.
        </p>
      </ul>
    </div>
  </div>

<div class="row">
  <hr>
</div>

  <div class="row">
    <div class="cover-image carousel-height" style="background: url('{{ URL::to('img/placeholders/placeholder-1.jpg') }}'); width: 100%;">
      <div style="padding-top: 10%;">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h3>Fast Internet</h3>
          <h4>Affordable Prices</h4>
          <hr>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
          </p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <br>
          <br>
          <br>
          <br>
          <br>
          <ul class="list-group">
            <li class="list-group-item">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
            <li class="list-group-item">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
            <li class="list-group-item">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <hr>
  </div>

  <div class="container">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="well">
        <img src="{{ URL::to('img/placeholders/placeholder-0.jpg') }}" class="img-thumbnail" />
        <p class="blockquote">
          <br>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="well">
        <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}" class="img-thumbnail" />
        <p class="blockquote">
          <br>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="well">
        <img src="{{ URL::to('img/placeholders/placeholder-2.jpg') }}" class="img-thumbnail" />
        <p class="blockquote">
          <br>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
      </div>
    </div>
  </div>
  </div>
</div>

@endsection
