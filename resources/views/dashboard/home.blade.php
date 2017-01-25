@extends('layouts.dash')

@section('title', 'Dashboard')

@section('edit-home-active', 'active')

@section('dash-content')

<!-- Company Intro -->

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

<!-- Home Introduction -->

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <!-- Start of Form -->
        <form class="form-group" action="/dashboard/homeCoIntro" method="post">
          {{ csrf_field() }}
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
          <form class="" action="/dashboard/homeCoIntro" method="post">
            {{ csrf_field() }}
            <select class="form-inline" name="Company-Intro-Link" placeholder="Intro Links To Which Page?">
              <option value="about">About</option>
              <option value="first_ps">First Product Page</option>
              <option value="second_ps">Second Product Page</option>
              <option value="third_ps">Third Product Page</option>
              <option value="fourth_ps">Fourth Product Page</option>
              <option value="contacts">Contacts</option>
            </select>
            <input class="btn btn-primary form-inline" type="submit" name="4-submit" value="Save">
          </form>
          <!-- End of form -->
      </div>
    </div>
    <div class="div-xs-4 col-sm-4 col-md-4 col-lg-4">
          <!-- start of form -->
          <form class="" action="/dashboard/homeCoIntro" method="post">
            {{ csrf_field() }}
            <input class="form-control" type="text" name="Company-Intro-li1" placeholder="Company Introduction Heading">
            <br>
            <input class="form-control" type="text" name="Company-Intro-li2" placeholder="Company Introduction Heading">
            <br>
            <input class="form-control" type="text" name="Company-Intro-li3" placeholder="Company Introduction Heading">
            <br>
            <input class="form-control" type="text" name="Company-Intro-li4" placeholder="Company Introduction Heading">
            <br>
            <input class="btn btn-primary" type="submit" name="3-Submit" value="Save">
          </form>
          <!-- End of form -->
    </div>
  </div>
</div>

<hr>

<!-- Home Internet -->

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <form class="form-group" action="/dashboard/homeInternet" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input class="form-control" type="text" name="Internet-Introduction" placeholder="Internet Services Heading">
        <br>
        <input class="btn btn-primary" type="file" name="Internet-Img1">
        <hr>
        <textarea class="form-control" name="Internet-Paragraph" rows="8" cols="80" placeholder="Internet Main Body Content"></textarea>
        <hr>
        <div class="blockquote">
          <input class="form-control" type="text" name="Internet-li-1" placeholder="Internet Pointer 1">
          <br>
          <input class="form-control" type="text" name="Internet-li-2" placeholder="Internet Pointer 2">
          <br>
          <input class="form-control" type="text" name="Internet-li-3" placeholder="Internet Pointer 3">
          <br>
          <input class="form-control" type="text" name="Internet-li-4" placeholder="Internet Pointer 4">
        </div>
        <input class="btn btn-primary" type="submit" name="1-Internet-submit" value="Save">
        </form>

        <div class="text-center">
          <form class="" action="/dashboard/homeInternet" method="post">
            {{ csrf_field() }}
            <select class="form-inline" name="Company-Intro-Link" placeholder="Intro Links To Which Page?">
              <option value="about">About</option>
              <option value="first_ps">First Product Page</option>
              <option value="second_ps">Second Product Page</option>
              <option value="third_ps">Third Product Page</option>
              <option value="fourth_ps">Fourth Product Page</option>
              <option value="contacts">Contacts</option>
            </select>
            <input class="btn btn-primary form-inline" type="submit" name="1-Internet-select-submit" value="Save">
          </form>
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <form class="form-group" action="/dashboard/homeInternet" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input class="form-control" type="text" name="Networking-Introduction" placeholder="Networking Services Heading">
        <br>
        <input class="form-control" type="text" name="Networking-li-1" placeholder="Networking Pointer 1">
        <br>
        <input class="form-control" type="text" name="Networking-li-2" placeholder="Networking Pointer 2">
        <br>
        <input class="form-control" type="text" name="Networking-li-3" placeholder="Networking Pointer 3">
        <br>
        <input class="form-control" type="text" name="Networking-li-4" placeholder="Networking Pointer 4">
        <hr>
        <textarea class="form-control" name="Networking-Paragraph" rows="8" cols="80" placeholder="Networking Main Body Content"></textarea>
        <hr>
        <input class="btn btn-primary" type="file" name="Networking-Img1">
        <input class="btn btn-primary" type="submit" name="1-Networking" value="Save">
      </form>

      <div class="text-center">
        <form class="form-group" action="/dashboard/homeInternet" method="post">
          {{ csrf_field() }}
          <select class="form-inline" name="Company-Intro-Link" placeholder="Intro Links To Which Page?">
            <option value="about">About</option>
            <option value="first_ps">First Product Page</option>
            <option value="second_ps">Second Product Page</option>
            <option value="third_ps">Third Product Page</option>
            <option value="fourth_ps">Fourth Product Page</option>
            <option value="contacts">Contacts</option>
          </select>
          <input class="btn btn-primary form-inline" type="submit" name="1-Internet-select-submit" value="Save">
        </form>
      </div>
    </div>
  </div>
  <hr>
</div>




@endsection
