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
        <div class="item active">
          <img src="" style="height: 80%;">
          <div class="carousel-caption">
            <h3></h3>
            <h5></h5>
          </div>
        </div>
        <div class="item">
          <img src="" style="height: 80%;">
          <div class="carousel-caption">
            <h3></h3>
            <h5></h5>
          </div>
        </div>
        <div class="item">
          <img src="" style="height: 80%;">
          <div class="carousel-caption">
            <h3></h3>
            <h5></h5>
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
      <img src="" class="img-thumbnail"/>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h3></h3>
      <hr>
      <ul>
        <p>

        </p>
      </ul>
    </div>`
  </div>

<div class="row">
  <hr>
</div>

<div class="row">
  <div class="well-lg">
    <img src="" height="500px" width="100%"/>
  </div>
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h3></h3>
      <h4></h4>
      <hr>
      <p>

      </p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <br>
      <br>
      <br>
      <br>
      <br>
      <ul class="list-group">
        <li class="list-group-item"></li>
        <li class="list-group-item"></li>
        <li class="list-group-item"></li>
      </ul>
    </div>
  </div>

  <div class="row">
    <hr>
  </div>
  <div class="container">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="well">
        <img src="" class="img-thumbnail" />
        <p class="blockquote">
          <br>

        </p>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="well">
        <img src="" class="img-thumbnail" />
        <p class="blockquote">
          <br>

        </p>
      </div>
    </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="well">
        <img src="" class="img-thumbnail" />
        <p class="blockquote">
          <br>

        </p>
      </div>
    </div>
  </div>
  </div>
</div>

@endsection
