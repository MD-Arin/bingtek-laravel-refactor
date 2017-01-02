@extends('layouts.master')

@section('title')
  Products and Services
@endsection

@section('ps-active')
  active
@endsection
@section('fourth-active')
  active
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row carousel-height">
      <div class="cover-image carousel-height" style="background: url('{{ URL::to($frpsOfficePartitioning1Img) }}'); width: 100%;">
        <div class="jumbotron text-right" style="padding-top: 10%;">
          <h1>{{ $frpsOfficePartitioning1H1 }}</h1>
          <p>
            {{ $frpsOfficePartitioning1P }}
          </p>
        </div>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="{{ URL::to($frpsOfficeSmart1Img) }}" class="img-thumbnail" />
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h4>{{ $frpsOfficeSmart1H1 }}</h4>
        <p>
          {{ $frpsOfficeSmart1P }}
        </p>
        <ul class="list-unstyled">
          <li>{{ $frpsOfficeSmart1li1 }}<li>
          <li>{{ $frpsOfficeSmart1li2 }}<li>
          <li>{{ $frpsOfficeSmart1li3 }}<li>
          <li>{{ $frpsOfficeSmart1li4 }}<li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h4>{{ $frpsOfficeAll1H1 }}</h4>
        <p>
          {{ $frpsOfficeAll1P }}
        </p>
        <ul class="list-unstyled">
          <li>{{ $frpsOfficeAll1li1 }}</li>
          <li>{{ $frpsOfficeAll1li2 }}</li>
          <li>{{ $frpsOfficeAll1li3 }}</li>
          <li>{{ $frpsOfficeAll1li4 }}</li>

        </ul>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="{{ URL::to($frpsOfficeAll1Img) }}" class="img-thumbnail" />
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="container">
        <div class="jumbotron">
          <h4 class="text-center">{{ $frpsOfficeComfort1H1 }}</h4>
          <h5 class="text-center">{{ $frpsOfficeComfort1H2 }}</h5>
          <hr>
          <p class="text-center">
            {{ $frpsOfficeComfort1P }}
          </p>
        </div>
      </div>
    </div>
    <hr>

    <div class="row carousel-height">
      <div class="cover-image carousel-height" style="background: url('{{ URL::to($frpsOfficeDesign1Img) }}'); width: 100%;">
        <div class="text-left" style="padding-top: 15%">
          <h2>{{ $frpsOfficeDesign1H1 }}</h2>
          <p>
            {{ $frpsOfficeDesign1P }}
          </p>
        </div>
      </div>
    </div>
    <hr>
    <div class="row carousel-height">
      <div class="cover-image carousel-height" style="background: url('{{ URL::to($frpsOfficeLuxury1Img) }}'); width: 100%;">
        <div class="text-center" style="padding-top: 15%">
          <h2>{{ $frpsOfficeLuxury1H1 }}</h2>
          <p>
            {{ $frpsOfficeLuxury1P }}
          </p>
        </div>
      </div>
    </div>
    <hr>
  </div>
@endsection
