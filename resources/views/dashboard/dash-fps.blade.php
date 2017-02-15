@extends('layouts.dash')

@section('title', 'Edit Products and Services')

@section('edit-fps-active', 'active')

@section('dash-content')

<!--Connectivity-->
<div class="container-fluid">
  <div class="row">
      <hr>
      <h1 class="text-center">Edit Overview</h1>
      <hr> 
      <form class="form-group" action="/dash-fps/fpsConnectivity" method="POST" enctype="multipart/form-data">
          {{ csrf_field()  }}
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <input class="btn btn-primary" type="file" name="1-fpsConnect-img-1" >
               <br>
              <input class="form-control" type="text" name="1-fpsConnect-h1-1" placeholder="Image Heading">
              <br>
              <input class="form-control" type="text" name="1-fpsConnect-h2-1" placeholder="Image sub-heading">
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <input class="btn btn-primary" type="file" name="1-fpsConnect-img-2" >
              <br>
              <input class="form-control" type="text" name="1-fpsConnect-h1-2" placeholder="Image Heading">
              <br>
              <input class="form-control" type="text" name="1-fpsConnect-h2-2" placeholder="Image sub-heading">
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <input class="btn btn-primary" type="file" name="1-fpsConnect-img-3" >
              <br>
              <input class="form-control" type="text" name="1-fpsConnect-h1-3" placeholder="Image Heading">
              <br>
              <input class="form-control" type="text" name="1-fpsConnect-h2-3" placeholder="Image sub-heading">
          </div>
              <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" type="submit" name="1-fpsConnectivity-submit"  value="Save">
      </form>

  <div class="row">
    <hr>
    <h1 class="text-center"> Edit Internet Connectivity</h1>
    <hr>
  </div>
      
      <!--Internet Connectivity-->

  <div class="row">
      <form class="form-group" action="/dash-fps/fpsInternet" method="POST" enctype="multipart/form-data">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              {{ csrf_field() }}
            <input class="btn btn-primary" type="file" name="1-fpsInternet-img-1">
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <input class="form-control"  type="text" name="1-fpsInternet-h1-1"  placeholder="Heading">
              <hr>
                  <textarea class="form-control" rows="8" cols="20" name="1-fpsInternet-p-1" placeholder="Content Body"></textarea>
          </div>
          <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" type="submit" name="1-fpsInternet-submit" value="Save">
      </form>
  </div>

<div class="row">
  <hr>
  <h1 class="text-center">Edit Internet Speeds</h1>
  <hr>
</div>

      
   <!--Fast Internet-->
  <div class="row">
    <div class="cover-image carousel-height" style="background: url('{{ URL::to('img/placeholders/placeholder-1.jpg') }}'); width: 100%;">
      <div style="padding-top: 10%;">
          <form class="form-group" action="/dash-fps/fpsFastInternet" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <input class="form-control" type="text" name="1-fastInternet-h1-1" placeholder="Heading">
                  <br>
                  <input class="form-control" type="text" name="1-fastInternet-h2-1" placeholder="Sub-heading">
                  <br>
                  <textarea class="form-control" rows="8" cols="20" name="1-fastInternet-p" placeholder="Content Body"></textarea>
                  <br>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <input class="btn btn-primary" type="file" name="1-fastInternet-img-1">
                  <br>
                  <input class="form-control" type="text" name="1-fastInternet-li-1" placeholder="Quick Pointers">
                  <br>
                  <input class="form-control" type="text" name="1-fastInternet-li-2" placeholder="Quick Pointers">
                  <br>
                  <input class="form-control" type="text" name="1-fastInternet-li-3" placeholder="Quick Pointers">
                  <br>
              </div>
              <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" type="submit" name="1-fastInternet-submit" value="Save">
          </form>
      </div>
    </div>
  </div>

   <!--Multiple Users-->
   
   <div class="row">
    <hr>
    <h1 class="text-center">Edit Users</h1>
    <hr>
  </div>


  <div class="container-fluid">
      <form class="form-group" action="/dash-fps/fpsUsers" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <input class="btn btn-primary" type="file" name="1-fpsUsers-img-1">
              <br>
              <input class="form-control" type="text" name="1-fpsUsers-p-1" placeholder="Tag Line">
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <input class="btn btn-primary" type="file" name="1-fpsUsers-img-2">
              <br>
              <input class="form-control" type="text" name="1-fpsUsers-p-2" placeholder="Tag Line">
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <input class="btn btn-primary" type="file" name="1-fpsUsers-img-2">
              <br>
              <input class="form-control" type="text" name="1-fpsUsers-p-2" placeholder="Tag Line">
          </div>
           <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" type="submit" name="1-fpsUsers-submit" value="Save">
      </form>
  </div>
  </div>
</div>

@endsection
