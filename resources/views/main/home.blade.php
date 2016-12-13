@extends('layouts.master')

@section('title')
  Home
@endsection

@section('home-active')
  active
@endsection

@section('content')
<div class="cover-image" style="background: url(''); height: 100%">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center vertical-center">
        <h1 class="text-inverse"><b></b></h1>
        <h3 class="text-inverse"><b></b></h3>
        <br>
        <!--Add a dynamic link to a page-->
        <a href="index.php?q=first-ps" class="btn btn-info">Learn More</a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="jumbotron">
    <h1></h1>
    <p></p>
    <a href="index.php?q=second-ps" class="btn btn-primary">Learn more</a>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="well well-lg">
        <img src="" class="img-thumbnail" />
        <h3></h3>
        <p>

        </p>
        <a href="index.php?q=third-ps" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="well well-lg">
        <img src="" class="img-thumbnail" />
        <h3></h3>
        <p>

        </p>
        <a href="index.php?q=fourth-ps" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </div>
</div>

<div class="well well-lg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h1></h1>
        <h3></h3>
        <p></p>
      </div>
      <div class="col-md-6">
        <img src="" class="img-thumbnail">
      </div>
    </div>
    <div class="row">
      <hr>
      <h3></h3>
      <p>

      </p>
      <hr>
    </div>
  </div>
</div>

<div class="well well-lg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <img src="" class="img-thumbnail">
      </div>
      <div class="col-md-6">
        <h1></h1>
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="row">
      <hr>
      <h3></h3>
      <p>

      </p>
      <hr>
    </div>
  </div>
</div>

</div>
@endsection
