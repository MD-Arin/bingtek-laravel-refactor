@extends('layouts.dash')

@section('title', 'Dashboard')

@section('edit-home-active', 'active')

@section('dash-content')
<div class="cover-image" style="background: url('{{ URL::to($homeCover) }}'); height: 100%">
  <div class="container-fluid">
    <div class="row">
      <div class="text-center">
        <!-- Start of Form -->
          <form action="/dashboard" method="post" >
              {{ csrf_field() }}
              <div class="form-group" style="margin-top: 25%;">
                  <input class="form-control" name="company-name" type="text" placeholder="Company Name">
                  <br>
                  <input class="form-control" type="text" name="company-slogan" placeholder="Company Slogan" >
                  <br>
                  <input class="btn btn-primary text-center" type="file" name="cover-image" >
                  <br>
                  <input class="btn btn-primary" type="submit" name="Submit">
              </div>
          </form>
          <!-- End of Form -->
      </div>
    </div>
  </div>
</div>

<hr>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="jumbotron text-center" id="intro">
        <!-- Start of Form -->

        <!-- End of Form -->
        <br>
        <div class="text-center">
          <!-- start of form -->
          
          <!-- End of form -->
        </div>
      </div>
    </div>
    <div class="div-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="jumbotron">
        <ul class="list-unstyled vertical-center">
          <!-- start of form -->

          <!-- End of form -->
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
