@extends('layouts.dash')

@section('title', 'Edit Products and Services')

@section('edit-tps-active', 'active')

@section('dash-content')

  <div class="container-fluid">
    <div class="row">
        <hr>
        <h2 class="list-group-item-heading text-center">Edit Product Introduction</h2>
        <hr>
        <form class="form-group" action="/dash-tps/tpsSoftDevIntro" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input class="form-control" type="text" name="1-softDevIntro-h1-1" placeholder="Introduction Section Heading" >
            <br>
            <textarea class="form-control" rows="8" cols="20" name="1-softDevIntro-p-1" placeholder="Introduction Body"></textarea>
            <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px;" value="Save">
        </form>
    </div>

    <div class="row">
      <hr>
      <h2 class="text-center">Edit Product Section I</h2>
      <hr>
    </div>

      <div class="row vertical-line-left vertical-line-right">
          <form class="form-group" action="/dash-tps/tpsSoftDev" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input class="form-control" type="text" name="1-softDev-1-h1-1" placeholder="Section 1 Heading" >
              <br>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <input class="form-control" type="text" name="1-softDev-1-h2-1" placeholder="Section 1 Part 1 Sub Heading" >
                  <br>
                  <textarea class="form-control" rows="8" cols="20" name="1-softDev-1-p-1" placeholder="Section 1 Part 1 Body Content"></textarea>
                  <br>
                  <input class="form-control" type="text" name="1-softDev-1-li-1" placeholder="Section 1 Part 1 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softDev-1-li-2" placeholder="Section 1 Part 1 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softDev-1-li-3" placeholder="Section 1 Part 1 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softDev-1-li-4" placeholder="Section 1 Part 1 Pointer" >
                  <br>
                  <input class="btn btn-primary" type="file" name="1-softDev-1-img-1">
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <input class="btn btn-primary" type="file" name="1-softDev-2-img-1">
                  <br>
                  <input class="form-control" type="text" name="1-softDev-2-h2-1" placeholder="Section 1 Part 2 Sub Heading" >
                  <br>
                  <textarea class="form-control" rows="8" cols="20" name="1-softDev-2-p-1" placeholder="Section 1 Part 2 Body Content"></textarea>
                  <br>
                  <input class="form-control" type="text" name="1-softDev-2-li-1" placeholder="Section 1 Part 2 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softDev-2-li-2" placeholder="Section 1 Part 2 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softDev-2-li-3" placeholder="Section 1 Part 2 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softDev-2-li-4" placeholder="Section 1 Part 2 Pointer" >
              </div>
              <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px;" value="Save">
          </form>
      </div>

    <div class="row">
      <hr>
      <h3 class="text-center">Edit Product Section II</h3>
      <hr>
    </div>

      <div class="row vertical-line-left vertical-line-right">
          <form class="form-group" action="/dash-tps/tpsSoftMen" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input class="form-control" type="text" name="1-softMen-1-h1-1" placeholder="Section 2 Heading" >
              <br>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <input class="btn btn-primary" type="file" name="1-softMen-1-img-1">
                  <br>
                  <input class="form-control" type="text" name="1-softMen-1-h2-1" placeholder="Section 2 Part 1 Sub Heading" >
                  <br>
                  <textarea class="form-control" rows="8" cols="20" name="1-softMen-1-p-1" placeholder="Section 2 Part 1 Body Content"></textarea>
                  <br>
                  <input class="form-control" type="text" name="1-softMen-1-li-1" placeholder="Section 2 Part 1 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softMen-1-li-2" placeholder="Section 2 Part 1 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softMen-1-li-3" placeholder="Section 2 Part 1 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softMen-1-li-4" placeholder="Section 2 Part 1 Pointer" >
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <input class="form-control" type="text" name="1-softMen-2-h2-1" placeholder="Section 2 Part 2 Sub Heading" >
                  <br>
                  <textarea class="form-control" rows="8" cols="20" name="1-softMen-2-p-1" placeholder="Section 2 Part 2 Body Content"></textarea>
                  <br>
                  <input class="form-control" type="text" name="1-softMen-2-li-1" placeholder="Section 2 Part 2 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softMen-2-li-2" placeholder="Section 2 Part 2 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softMen-2-li-3" placeholder="Section 2 Part 2 Pointer" >
                  <br>
                  <input class="form-control" type="text" name="1-softMen-2-li-4" placeholder="Section 2 Part 2 Pointer" >
                  <br>
                  <input class="btn btn-primary" type="file" name="1-softMen-2-img-1">
              </div>
              <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px;" value="Save">
          </form>
      </div>

    <div class="row">
      <div class="jumbotron">
        <hr>
        <h3 class="text-center">Edit Final Section</h3>
        <hr>
        
        <form class="form-group" action="/dash-tps/tpsSoftDiverse" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input class="form-control" type="text" name="1-softDiverse-h1-1" placeholder="Final Section Heading">
            <br>
            <textarea class="form-control" name="1-softDiverse-p-1" rows="8" cols="20" placeholder="Final Section Body Content"></textarea>
            <br>
            <input class="form-control" type="text" name="1-softDiverse-li-1" placeholder="Final Section Pointer">
            <br>
            <input class="form-control" type="text" name="1-softDiverse-li-2" placeholder="Final Section Pointer">
            <br>
            <input class="form-control" type="text" name="1-softDiverse-li-3" placeholder="Final Section Pointer">
            <br>
            <input class="form-control" type="text" name="1-softDiverse-li-4" placeholder="Final Section Pointer">
            <br>
            <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px;" value="Save">
        </form>
      </div>
    </div>
  </div>
@endsection
