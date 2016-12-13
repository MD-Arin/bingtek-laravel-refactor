@extends('layouts.master')

@section('title')
  About
@endsection

@section('about-active')
 active
@endsection

@section('content')

<div class="container-fluid">
<hr>
<h1 class="text-center">Our Story</h1>
<hr>
  <div class="row">
    <h3 class="text-center"></h3>
    <hr class="underline">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <img src="" class="img-thumbnail"/>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h4></h4>
      <h4></h4>
      <hr>
      <h4>The Story: </h4>
      <hr>
      <p>

      </p>
    </div>
  </div>

  <hr>

  <div class="row">
    <h3 class="text-center">Where We've Been</h3>
    <hr class="underline">
    <div class="row">
      <div id="milestone-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#milestone-carousel"  data-slide-to="0" class="active"></li>
          <li data-target="#milestone-carousel"  data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="row">
              <img src="">
            </div>
          </div>
          <div class="item">
            <div class="row">
              <img src="">
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#milestone-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#milestone-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

      <br>
      <br>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h4></h4>
      <h4></h4>
      <hr>
      <h4>The Story: </h4>
      <hr>
      <p>

      </p>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h4></h4>
      <h4></h4>
      <hr>
      <h4>The Story: </h4>
      <hr>
      <p>

      </p>
    </div>
  </div>
  <br>
  <br>
  <div class="text-center">
    <hr>
    <h1>Testimonials</h1>
    <hr>
  </div>
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="" class="img-thumbnail" />
      <p class="blockquote-reverse">

      </p>
      <hr>
      <h5 class="blockquote"><i>Name: </i></h5>
      <h5 class="blockquote"><i>Position: </i> </h5>
      <h5 class="blockquote"><i>Company: </i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="" class="img-thumbnail" />
      <p class="blockquote-reverse">

      </p>
      <hr>
      <h5 class="blockquote"><i>Name: </i></h5>
      <h5 class="blockquote"><i>Position: </i> </h5>
      <h5 class="blockquote"><i>Company: </i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="" class="img-thumbnail" />
      <p class="blockquote-reverse">

      </p>
      <hr>
      <h5 class="blockquote"><i>Name: </i></h5>
      <h5 class="blockquote"><i>Position: </i> </h5>
      <h5 class="blockquote"><i>Company: </i></h5>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <img src="" class="img-thumbnail" />
      <p class="blockquote-reverse">

      </p>
      <hr>
      <h5 class="blockquote"><i>Name: </i></h5>
      <h5 class="blockquote"><i>Position:  </i> </h5>
      <h5 class="blockquote"><i>Company: </i></h5>
    </div>
  </div>

  <div class="text-center">
    <hr>
    <h1>Partners</h1>
    <hr>
  </div>
  <div class="row">
    <div id="partners-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#partners-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#partners-carousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="" class="img-thumbnail">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="" class="img-thumbnail">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="" class="img-thumbnail">
        </div>
      </div>
      <div class="item">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="" class="img-thumbnail">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="" class="img-thumbnail">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <img src="" class="img-thumbnail">
        </div>
      </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#partners-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#partners-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="text-center">
    <hr>
    <h1>Our Team</h1>
    <hr>
  </div>
  <div class="row">
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src=""
      class="center-block img-circle img-responsive">
      <h3 class="text-center"></h3>
      <p class="text-center"></p>
    </div>
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src=""
      class="center-block img-circle img-responsive">
      <h3 class="text-center"></h3>
      <p class="text-center"></p>
    </div>
    <div class="col=xs-4 col-sm-4 col-md-4 col-lg-4">
      <img src=""
      class="center-block img-circle img-responsive">
      <h3 class="text-center"></h3>
      <p class="text-center"></p>
    </div>
  </div>
</div>

@endsection
