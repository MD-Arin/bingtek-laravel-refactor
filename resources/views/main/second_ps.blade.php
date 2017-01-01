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
    <h1 class="text-center">{{ $spsNetworkingIntro1H1 }}</h1>
    <h3 class="text-center">{{ $spsNetworkingIntro1H2 }}</h3>
    <p>
      {{ $spsNetworkingIntro1P }}
    </p>
  </div>

  <div class="row">
    <hr>
  </div>
  <div class="row  carousel-height">
    <div class="cover-image" style="background: url('{{ URL::to($spsNetworkingPointers1Img) }}'); height: 100vh; width: 100%;">
      <div class="text-left">
        <ul class="list-unstyled">
          <li>{{ $spsNetworkingPointers1li1 }}</li>
          <li>{{ $spsNetworkingPointers1li2 }}</li>
          <li>{{ $spsNetworkingPointers1li3 }}</li>
          <li>{{ $spsNetworkingPointers1li4 }}</li>
        </ul>
      </div>
      <div class="text-center">
        <ul class="list-unstyled">
          <li>{{ $spsNetworkingPointers2li1 }}</li>
          <li>{{ $spsNetworkingPointers2li2 }}</li>
          <li>{{ $spsNetworkingPointers2li3 }}</li>
          <li>{{ $spsNetworkingPointers2li4 }}</li>
        </ul>
      </div>
      <div class="text-right">
        <ul class="list-unstyled">
          <li>{{ $spsNetworkingPointers3li1 }}</li>
          <li>{{ $spsNetworkingPointers3li2 }}</li>
          <li>{{ $spsNetworkingPointers3li3 }}</li>
          <li>{{ $spsNetworkingPointers3li4 }}</li>
        </ul>
      </div>
    </div>
  </div>

    <hr>

    <div class="container">
      <p class="text-info text-center jumbotron">
        {{ $spsNetworkingTouchline1P }}
      </p>
    </div>

    <hr>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h3 class="text-center">{{ $spsNetworkingDepartments1H1 }}</h3>
        <hr>
        <p>
          {{ $spsNetworkingDepartments1P }}
        </p>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="{{ URL::to($spsNetworkingDepartments2Img) }}" class="img-thumbnail"/>
      </div>
    </div>

  <hr>

  <div class="container-fluid">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 vertical-line-right">
      <div class="row">
        <h3 class="text-center">{{ $spsNetworkingTypes1H1 }}</h3>
        <hr>
        <p>
          {{ $spsNetworkingTypes1P }}
        </p>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  vertical-line-left">
      <div class="row">
        <h3 class="text-center">{{ $spsNetworkingTypes2H1 }}</h3>
        <hr>
        <p>
          {{ $spsNetworkingTypes2P }}
        </p>
      </div>
    </div>
  </div>
</div>
<hr>

@endsection
