@extends('layouts.master')

@section('title')
  Product and Services
@endsection

@section('ps-active')
  active
@endsection
@section('third-active')
  active
@endsection

@section('content')

  <div class="container-fluid margin-top">
    <div class="row">
      <div class="container">
        <hr>
        <h2 class="list-group-item-heading text-center">{{ $tpsSoftDevIntro1H1 }}</h2>
        <hr>
        <div class="jumbotron">
          <p class="list-group-item-text text-center">
            {{ $tpsSoftDevIntro1P }}
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <hr class="underline">
      <h2 class="text-center">{{ $tpsSoftDev1H1 }}</h2>
      <hr class="underline">
    </div>

    <div class="row vertical-line-left vertical-line-right">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h3>{{ $tpsSoftDev2H1 }}</h3>
          <p>
            {{ $tpsSoftDev2P }}
          </p>
          <ul class="list-unstyled">
            <li>{{  $tpsSoftDev2li1 }}</li>
            <li>{{  $tpsSoftDev2li2 }}</li>
            <li>{{  $tpsSoftDev2li3 }}</li>
            <li>{{  $tpsSoftDev2li4 }}</li>
          </ul>
          <img src="{{ URL::to($tpsSoftDev2Img) }}" class="img-thumbnail" />
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <img src="{{ URL::to($tpsSoftDev3Img) }}" class="img-thumbnail" />
          <h3>{{ $tpsSoftDev3H1 }}</h3>
          <p>
            {{ $tpsSoftDev3P }}
          </p>
          <ul class="list-unstyled">
            <li>{{ $tpsSoftDev3li1 }}</li>
            <li>{{ $tpsSoftDev3li2 }}</li>
            <li>{{ $tpsSoftDev3li3 }}</li>
            <li>{{ $tpsSoftDev3li4 }}</li>
          </ul>
      </div>
    </div>

    <div class="row">
      <hr class="underline">
      <h3 class="text-center">{{ $tpsSoftMaint1H1 }}</h3>
      <hr class="underline">
    </div>

    <div class="row vertical-line-left vertical-line-right">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <img src="{{ URL::to($tpsSoftMaint1Img) }}" class="img-thumbnail" />
          <h3>{{ $tpsSoftMaint2H1 }}</h3>
          <p>
            {{ $tpsSoftMaint2P }}
          </p>
          <ol class="list-unstyled">
            <li>{{ $tpsSoftMaint2li1 }}</li>
            <li>{{ $tpsSoftMaint2li2 }}</li>
            <li>{{ $tpsSoftMaint2li3 }}</li>
            <li>{{ $tpsSoftMaint2li4 }}</li>
          </ol>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h3>{{ $tpsSoftMaint3H1 }}</h3>
          <p>
            {{ $tpsSoftMaint3P }}
          </p>
          <ol class="list-unstyled">
            <li>{{ $tpsSoftMaint3li1 }}</li>
            <li>{{ $tpsSoftMaint3li2 }}</li>
            <li>{{ $tpsSoftMaint3li3 }}</li>
            <li>{{ $tpsSoftMaint3li4 }}</li>
          </ol>
          <img src="{{ URL::to($tpsSoftMaint3Img) }}" class="img-thumbnail" />
      </div>
    </div>

    <div class="row">
      <div class="jumbotron">
        <hr class="underline">
        <h3 class="text-center">{{ $tpsSoftDiverse1H1 }}</h3>
        <hr class="underline">
        <p class="text-center">
          {{ $tpsSoftDiverse1P }}
        </p>
        <ol class="list-unstyled text-center">
          <li>{{ $tpsSoftDiverse1li1 }}</li>
          <li>{{ $tpsSoftDiverse1li2 }}</li>
          <li>{{ $tpsSoftDiverse1li3 }}</li>
          <li>{{ $tpsSoftDiverse1li4 }}</li>
        </ol>
      </div>
    </div>
  </div>
@endsection
