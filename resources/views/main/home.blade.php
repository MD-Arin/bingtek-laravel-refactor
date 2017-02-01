@extends('layouts.master')

@section('title')
  Home
@endsection

@section('home-active')
  active
@endsection

@section('content')

<!-- Cover -->
<div class="cover-image" style="background: url('{{ URL::to($homeCover) }}'); height: 100%">
  <div class="container-fluid">
    <div class="row">
      <div class="text-center">
        <h1 style="font-size: 44; padding-top: 25%;"><b>{{ $homeCompany }}</b></h1>
        <h4 style="font-size: 35; padding-bottom: 15px;"><u><b>{{ $homeMotto }}</b></u></h4>
        <a href="#intro" id="home-slide" class="btn btn-circle" click="slide-down"><i class="glyphicon glyphicon-chevron-down"></i></a>
      </div>
    </div>
  </div>
</div>
<hr>

<!-- Company Introduction -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="jumbotron text-center" id="intro">
        <h1>{{ $homeCoIntro }}</h1>
        <p>{{ $homeCoIntroBody }}</p>
        <br>
        <div class="text-center">
          <a href="{{route("$homeCoIntrolink")}}" class="btn btn-primary">Learn more</a>
        </div>
      </div>
    </div>
    <div class="div-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="jumbotron">
        <ul class="list-unstyled vertical-center">
          <li>{{ $homeCoIntroli1 }}<li>
          <li>{{ $homeCoIntroli2 }}</li>
          <li>{{ $homeCoIntroli3 }}<li>
          <li>{{ $homeCoIntroli4 }}</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<hr>

  <!-- Internet Service -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h2 class="text-center"><b>{{ $homeInternetH1 }}</b></h2>
      <img src="{{ URL::to( $homeInternetImg ) }}" class="img-thumbnail" />
      <hr>
      <p class="text-center">
        {{ $homeInternetP }}
      </p>
      <hr>
      <div class="blockquote">
        <ul class="list-unstyled text-center">
          <li>{{ $homeInternetli1 }}</li>
          <li>{{ $homeInternetli2 }}</li>
          <li>{{ $homeInternetli3 }}</li>
          <li>{{ $homeInternetli4 }}</li>
        </ul>
      </div>
      <div class="text-center">
        <a href="{{route("$homeInternetlink")}}" class="btn btn-primary">More...</a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h2 class="text-center"><b>{{ $homeNetworkingH1 }}</b></h2>
      <div class="blockquote">
        <ul class="list-unstyled text-center">
          <li>{{ $homeNetworkingli1 }}</li>
          <li>{{ $homeNetworkingli2 }}</li>
          <li>{{ $homeNetworkingli3 }}</li>
          <li>{{ $homeNetworkingli4 }}</li>
        </ul>
      </div>
      <hr>
      <p>
        {{ $homeNetworkingP }}
      </p>
      <hr>
      <img src="{{ URL::to($homeNetworkingImg) }}" class="img-thumbnail" />
      <div class="text-center">
        <a href="{{route("$homeNetworkinglink")}}" class="btn btn-primary" style="margin-top: 10px;">More...</a>
      </div>
    </div>
  </div>
  <hr>
</div>

<!-- Software -->
<div class="container-fluid">
  <div class="row">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#milestone-carousel"  data-slide-to="0" class="active"></li>
        <li data-target="#milestone-carousel"  data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <!-- Software Development -->
      <div class="carousel-inner" role="listbox">
        <div class="item active carousel-height">
          <div class="row">
            <img src="{{ URL::to($homeSoftDevImg1) }}">
            <div class="carousel-caption">
              <h3>{{ $homeSoftDevImg1H1 }}</h3>
              <ul class="list-unstyled">
                <li>{{ $homeSoftDevImg1li1 }}</li>
                <li>{{ $homeSoftDevImg1li2 }}</li>
                <li>{{ $homeSoftDevImg1li3 }}<li>
                <li>{{ $homeSoftDevImg1li4 }}</li>
              </ul>
              <a class="btn btn-default" href="{{ $homeSoftDevlink }}">More...</a>
            </div>
          </div>
        </div>

        <!-- Software Maintenance -->
        <div class="item carousel-height">
          <div class="row">
            <img src="{{ URL::to($homeSoftMaintenanceImg1) }}">
            <div class="carousel-caption">
              <h3>{{ $homeSoftMaintenanceImg1H1 }}</h3>
              <ul class="list-unstyled">
                <li>{{ $homeSoftMaintenanceImg1li1 }}</li>
                <li>{{ $homeSoftMaintenanceImg1li2 }}</li>
                <li>{{ $homeSoftMaintenanceImg1li3 }}</li>
                <li>{{ $homeSoftMaintenanceImg1li4 }}</li>
              </ul>
              <a class="btn btn-default" href="{{ $homeSoftMaintenancelink }}">More...</a>
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

<!-- office Space -->
<div class="well well-lg">
  <div class="container-fluid">
      <div class="row">
      <div class="col-md-6">
        <h1>{{ $homeOffice1H1 }}</h1>
        <h3>{{ $homeOffice1H2 }}</h3>
        <ul class="list-unstyled">
          <li>{{ $homeOffice1li1 }}</li>
          <li>{{ $homeOffice1li2 }}</li>
          <li>{{ $homeOffice1li3 }}</li>
          <li>{{ $homeOffice1li4 }}</li>
        </ul>
      </div>
      <div class="col-md-6">
        <img src="{{ URL::to($homeOffice2Img) }}" class="img-thumbnail">
      </div>
    </div>
    <div class="row">
      <hr>
      <h3>{{ $homeOffice3H1 }}</h3>
      <p>
        {{ $homeOffice3P }}
      </p>
      <a class="btn btn-primary" href="{{ route("$homeOffice3link") }}">More...</a>
      <hr>
    </div>
  </div>
</div>

@endsection
