@extends('layouts.dash')

@section('title', 'Edit Products and Services')

@section('edit-sps-active', 'active')

@section('dash-content')
<div class="container-fluid">
    <div class="row">
        <hr>
        <h1 class="text-center">Edit Introduction</h1>
        <hr>
    </div>
    <div class="jumbotron">
        <form class="form-group" action="/dash-sps/spsIntro" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input class="form-control" type="text" name="1-spsIntro-h1-1" placeholder="Introduction Heading">
            <br>
            <input class="form-control" type="text" name="1-spsIntro-h2-1" placeholder="Introduction Sub-Heading">
            <br>
            <textarea class="form-control" rows="8" cols="20" name="1-spsIntro-p-1" placeholder="Introduction Body"></textarea>
            <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px;" value="Save">
        </form>
    </div>

    <div class="row">
        <hr>
        <h1 class="text-center">Edit Section 2</h1>
        <hr>
    </div>
    <div class="row  carousel-height">
        <div class="cover-image" style="background: url('{{ URL::to('img/placeholders/placeholder-2.jpg') }}'); height: 100vh; width: 100%;">
            <form class="form-group" style="padding-top: 23%;" action="/dash-sps/spsSec2" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <input class="form-control" type="text" name="1-spsSec2-li-1" placeholder="Section Pointer 1">
                    <br>
                    <input class="form-control" type="text" name="1-spsSec2-li-2" placeholder="Section Pointer 2">
                    <br>
                    <input class="form-control" type="text" name="1-spsSec2-li-3" placeholder="Section Pointer 3">
                    <br>
                    <input class="form-control" type="text" name="1-spsSec2-li-4" placeholder="Section Pointer 4">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <input class="btn btn-primary" type="file" name="1-spsSec2-img-1">
                </div>
                <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" type="submit" value="Save">
            </form>
        </div>
    </div>

    <div class="row">
        <hr>
        <h1 class="text-center">Edit Touchline</h1>
        <hr>
    </div>

    <div class="container">
        <form class="form-group" action="/dash-sps/spsTouchline" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <textarea class="form-control" rows="8" cols="20" name="1-spsTouchline-p-1" placeholder="Touchline Body"></textarea>
            <br>
            <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" type="submit" value="Save">
        </form>
    </div>

    <div class="row">
        <hr>
        <h1 class="text-center">Edit Section 3</h1>
        <hr>
    </div>

    <div class="row">
        <form class="form-group" action="/dash-sps/spsSec3" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input class="form-control" type="text" name="1-spsSec2-h1-1" placeholder="Section 3 Heading">
                <hr>
                <textarea class="form-control" rows="8" cols="20" name="1-spsSec3-p-1" placeholder="Section 3 Body Content"></textarea>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input class="btn btn-primary" type="file" name="1-spsSec3-img-1">
            </div>
            <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" type="submit" value="Save">
        </form>
    </div>

    <div class="row">
        <hr>
        <h1 class="text-center">Edit Final Section</h1>
        <hr>
    </div>

    <div class="container-fluid">
        <form class="form-group" action="/dash-sps/spsSec4" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 vertical-line-right">
                <div class="row">
                    <input class="form-control" type="text" name="1-spsSec4-h1-1" placeholder="Final Section Heading 1">
                    <hr>
                    <textarea class="form-control" rows="8" cols="20" name="1-spsSec4-p-1" placeholder="Final Section Body 1"></textarea>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  vertical-line-left">
                <div class="row">
                    <input class="form-control" type="text" name="1-spsSec4-h1-2" placeholder="Final Section Heading 2">
                    <hr>
                    <textarea class="form-control" rows="8" cols="20" name="1-spsSec4-p-2" placeholder="Final Section Body 2"></textarea>
                </div>
            </div>
            <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" type="submit" value="Save">
        </form>
    </div>
</div>
<hr>

@endsection
