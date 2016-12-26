@extends('layouts.master')

@section('title')
  Home
@endsection

@section('home-active')
  active
@endsection

@section('content')
<div class="cover-image" style="background: url('{{ URL::to('img/placeholders/placeholder-1.jpg') }}'); height: 100%">
  <div class="container-fluid">
    <div class="row vertical-center">
      <div class="text-center">
        <h1 class="text-inverse"><b>BINGTEK LTD</b></h1>
        <h4><b>Dedicated to better technology</b></h4>
        <a href="#intro" class="btn btn-circle"><i class="glyphicon glyphicon-chevron-down"></i></a>
      </div>
    </div>
  </div>
</div>
<hr>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="jumbotron text-center" id="intro">
        <h1>Short Intro to BINGTEK</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
        <br>
        <div class="text-center">
          <a href="{{ route('about') }}" class="btn btn-primary">Learn more</a>
        </div>
      </div>
    </div>
    <div class="div-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="jumbotron">
        <ul class="list-unstyled vertical-center">
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h2 class="text-center"><b>Our Internet Services</b></h2>
      <img src="{{ URL::to('img/placeholders/placeholder-2.jpg') }}" class="img-thumbnail" />
      <hr>
      <p class="text-center">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
      </p>
      <hr>
      <div class="blockquote">
        <ul class="list-unstyled text-center">
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        </ul>
      </div>
      <div class="text-center">
        <a href="" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h2 class="text-center"><b>Diversified Networking Services</b></h2>
      <div class="blockquote">
        <ul class="list-unstyled text-center">
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        </ul>
      </div>
      <hr>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
      </p>
      <hr>
      <img src="{{ URL::to('img/placeholders/placeholder-0.jpg') }}" class="img-thumbnail" />
      <div class="text-center">
        <a href="" class="btn btn-primary" style="margin-top: 10px;">Learn More</a>
      </div>
    </div>
  </div>
  <hr>
</div>

<div class="container-fluid">
  <div class="row">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#milestone-carousel"  data-slide-to="0" class="active"></li>
        <li data-target="#milestone-carousel"  data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 carousel-height">
              <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}">
              <div class="carousel-caption-right">
                <h3>Software Development Services</h3>
                <ul class="list-unstyled">
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                </ul>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 carousel-height">
              <img src="{{ URL::to('img/placeholders/placeholder-1.jpg') }}">
              <div class="carousel-caption-right">
                <h3>Software Development Services</h3>
                <ul class="list-unstyled">
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 carousel-height">
              <img src="{{ URL::to('img/placeholders/placeholder-2.jpg') }}">
              <div class="carousel-caption-right">
                <h3>Software Maintenance Services</h3>
                <ul class="list-unstyled">
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                </ul>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 carousel-height">
              <img src="{{ URL::to('img/placeholders/placeholder-2.jpg') }}">
              <div class="carousel-caption-right">
                <h3>Software Maintenance Services</h3>
                <ul class="list-unstyled">
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<hr>

<div class="well well-lg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h1>Office Furnishing</h1>
        <h3>Small Office partitioning and furnishing</h3>
        <ul class="list-unstyled">
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
        </ul>
      </div>
      <div class="col-md-6">
        <img src="{{ URL::to('img/placeholders/placeholder-0.jpg') }}" class="img-thumbnail">
      </div>
    </div>
    <div class="row">
      <hr>
      <h3>Office Building Tag line</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
      </p>
      <hr>
    </div>
  </div>
</div>

@endsection
