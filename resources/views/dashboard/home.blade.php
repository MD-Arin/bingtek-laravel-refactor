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

      <form class="form-group" action="/dashboard/homeInternet" method="post">
        {{ csrf_field() }}
        <select class="form-inline" name="Internet-Intro-Link">
          <option value="about">About</option>
          <option value="first_ps">First Product Page</option>
          <option value="second_ps">Second Product Page</option>
          <option value="third_ps">Third Product Page</option>
          <option value="fourth_ps">Fourth Product Page</option>
          <option value="contacts">Contacts</option>
        </select>
        <input class="btn btn-primary form-inline" type="submit" name="1-Internet-Link-submit" value="Save">
      </form>
    </div>
    <!-- Home Networking -->
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <form class="form-group" action="/dashboard/homeNetworking" method="post" enctype="multipart/form-data">
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

    <form class="form-group" action="/dashboard/homeNetworking" method="post">
      {{ csrf_field() }}
      <select class="form-inline" name="Networking-Intro-Link" placeholder="Intro Links To Which Page?">
        <option value="about">About</option>
        <option value="first_ps">First Product Page</option>
        <option value="second_ps">Second Product Page</option>
        <option value="third_ps">Third Product Page</option>
        <option value="fourth_ps">Fourth Product Page</option>
        <option value="contacts">Contacts</option>
      </select>
      <input class="btn btn-primary form-inline" type="submit" name="1-Networking-Link-submit" value="Save">
    </form>
    </div>
  </div>
  <hr>
</div>

<!-- Home Software Development -->
<div class="container-fluid">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <form class="form-group" action="/dashboard/homeSoftDev" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label class="form-control" for="soft-img-1">First Image</label>
            <input class"btn btn-primary" type="file" name="soft-img-1">
            <br>
            <input class="form-control" type="text" name="softDev-h1" placeholder="Software Development Heading">
            <br>
            <input class="form-control" type="text" name="softDev-li-1" placeholder="Software Development Pointer 1">
            <br>
            <input class="form-control" type="text" name="softDev-li-2" placeholder="Software Development Pointer 2">
            <br>
            <input class="form-control" type="text" name="softDev-li-3" placeholder="Software Development Pointer 3">
            <br>
            <input class="form-control" type="text" name="softDev-li-4" placeholder="Software Development Pointer 4">
            <input class="btn btn-primary form-inline" type="submit" name="SoftDev-submit" value="Save">
        </form>
        <form class="form-group" action="/dashboard/homeSoftDev" method="post">
          {{ csrf_field() }}
          <select class="form-inline" name="SoftDev-Intro-Link" placeholder="Intro Links To Which Page?">
            <option value="about">About</option>
            <option value="first_ps">First Product Page</option>
            <option value="second_ps">Second Product Page</option>
            <option value="third_ps">Third Product Page</option>
            <option value="fourth_ps">Fourth Product Page</option>
            <option value="contacts">Contacts</option>
          </select>
          <input class="btn btn-primary form-inline" type="submit" name="SoftDev-Link-submit" value="Save">
        </form>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <form class="form-group" action="/dashboard/homeSoftMen" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label class="form-control" for="soft-img-2">Second Image</label>
            <input class"btn btn-primary" type="file" name="soft-img-2">
            <br>
            <input class="form-control" type="text" name="softMen-h1" placeholder="Software Maintenance Heading">
            <br>
            <input class="form-control" type="text" name="softMen-li-1" placeholder="Software Maintenance Pointer 1">
            <br>
            <input class="form-control" type="text" name="softMen-li-2" placeholder="Software Maintenance Pointer 2">
            <br>
            <input class="form-control" type="text" name="softMen-li-3" placeholder="Software Maintenance Pointer 3">
            <br>
            <input class="form-control" type="text" name="softMen-li-4" placeholder="Software Maintenance Pointer 4">
            <input class="btn btn-primary form-inline" type="submit" name="SoftMen-submit" value="Save">
        </form>
        <form class="form-group" action="/dashboard/homeSoftMen" method="post">
          {{ csrf_field() }}
          <select class="form-inline" name="SoftMen-Intro-Link" placeholder="Intro Links To Which Page?">
            <option value="about">About</option>
            <option value="first_ps">First Product Page</option>
            <option value="second_ps">Second Product Page</option>
            <option value="third_ps">Third Product Page</option>
            <option value="fourth_ps">Fourth Product Page</option>
            <option value="contacts">Contacts</option>
          </select>
          <input class="btn btn-primary form-inline" type="submit" name="SoftMen-Link-submit" value="Save">
        </form>
    </div>
</div>

<hr>





@endsection
