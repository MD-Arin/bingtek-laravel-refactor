@extends('layouts.dash')

@section('title', 'Dashboard')

@section('edit-home-active', 'active')

@section('dash-content')
<div class="cover-image" style="background: url('{{ URL::to($homeCover) }}'); height: 100%">
  <div class="container-fluid">
    <div class="row">
      <div class="text-center">
        <!-- Start of Form -->
          <form action="/dashboard/home" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group" style="margin-top: 25%;">
                  <input class="form-control" name="company-name" type="text" placeholder="Company Name">
                  <br>
                  <input class="form-control" type="text" name="company-slogan" placeholder="Company Slogan" >
                  <br>
                  <input class="btn btn-primary" type="file" name="cover-image" >
                  <br>
                  <input class="btn btn-primary" type="submit" name="Submit" value="Save">
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
        <!-- Start of Form -->
        <form class="form-group" action="/dashboard/home" method="post">
          <input class="form-control" type="text" name="Company-Intro" placeholder="Company Introduction Heading">
          <br>
          <textarea class="form-control" name="Company-Intro-Body" rows="8" cols="80" placeholder="Company Introduction Body"></textarea>
          <br>
          <input class="btn btn-primary" type="submit" name="2-Submit" value="Save">
        </form>
        <!-- End of Form -->
        <br>
        <div class="text-center">
          <!-- start of form -->
          <form class="" action="/dashboard/home" method="post">
            <select class="form-inline" name="Company-Intro-Link" placeholder="Intro Links To Which Page?">
              <option value="about">About</option>
              <option value="fps">First Product Page</option>
              <option value="sps">Second Product Page</option>
              <option value="tps">Third Product Page</option>
              <option value="frps">Fourth Product Page</option>
              <option value="contacts">Contacts</option>
            </select>
            <input class="btn btn-primary form-inline" type="submit" name="4-submit" value="Save">
          </form>
          <!-- End of form -->
      </div>
    </div>
    <div class="div-xs-4 col-sm-4 col-md-4 col-lg-4">
          <!-- start of form -->
          <form class="" action="/dashboard/home" method="post">
            <input class="form-control" type="text" name="Company-Intro" placeholder="Company Introduction Heading">
            <br>
            <input class="form-control" type="text" name="Company-Intro" placeholder="Company Introduction Heading">
            <br>
            <input class="form-control" type="text" name="Company-Intro" placeholder="Company Introduction Heading">
            <br>
            <input class="form-control" type="text" name="Company-Intro" placeholder="Company Introduction Heading">
            <br>
            <input class="btn btn-primary" type="submit" name="3-Submit" value="Save">
          </form>
          <!-- End of form -->
    </div>
  </div>
</div>
@endsection
