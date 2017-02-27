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
                        <img src="{{ URL::to($fpsConnectivity1Img) }}">
                        <div class="carousel-caption">
                            <h3>{{ $fpsConnectivity1ImgH1 }}</h3>
                            <h5>{{ $fpsConnectivity1ImgH2 }}</h5>
                        </div>
                    </div>
                </div>
                <div class="item carousel-height">
                    <div class="row">
                        <img src="{{ URL::to($fpsConnectivity2Img) }}">
                        <div class="carousel-caption">
                            <h3>{{ $fpsConnectivity2ImgH1 }}</h3>
                            <h5>{{ $fpsConnectivity2ImgH2 }}</h5>
                        </div>
                    </div>
                </div>
                <div class="item carousel-height">
                    <div class="row">
                        <img src="{{ URL::to($fpsConnectivity3Img) }}">
                        <div class="carousel-caption">
                            <h3>{{ $fpsConnectivity3ImgH1 }}</h3>
                            <h5>{{ $fpsConnectivity3ImgH2 }}</h5>
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
            <img src="{{ URL::to($fpsInternetConnection1Img) }}" class="img-thumbnail"/>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h2>{{ $fpsInternetConnection2H1 }}</h2>
            <hr>
            <h3>{{ $fpsInternetConnection2H2 }}</h3>
            <ul>
                <p>
                    {{ $fpsInternetConnection2P1 }}
                </p>
            </ul>
        </div>
    </div>

    <div class="row">
        <hr>
    </div>

    <div class="row">
        <div class="cover-image carousel-height" style="background: url('{{ URL::to($fpsFastInternet1Img) }}'); width: 100%;">
            <div style="padding-top: 10%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h3>{{ $fpsFastInternet1H1 }}</h3>
                    <h4>{{ $fpsFastInternet1H2 }}</h4>
                    <hr>
                    <p>
                        {{ $fpsFastInternet1P }}
                    </p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item">{{ $fpsFastInternet2li1 }}</li>
                        <li class="list-group-item">{{ $fpsFastInternet2li2 }}</li>
                        <li class="list-group-item">{{ $fpsFastInternet2li3 }}</li>
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
                <img src="{{ URL::to($fpsMultipleUsers1Img) }}" class="img-thumbnail" />
                <p class="blockquote">
                    <br>
                    {{ $fpsMultipleUsers1P }}
                </p>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="well">
                <img src="{{ URL::to($fpsMultipleUsers2Img) }}" class="img-thumbnail" />
                <p class="blockquote">
                    <br>
                    {{ $fpsMultipleUsers2P }}
                </p>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="well">
                <img src="{{ URL::to($fpsMultipleUsers3Img) }}" class="img-thumbnail" />
                <p class="blockquote">
                    <br>
                    {{ $fpsMultipleUsers3P }}
                </p>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
