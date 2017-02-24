@extends('layouts.dash')

@section('title', 'Edit Products and Services')

@section('edit-frps-active', 'active')

@section('dash-content')
<div class="container-fluid">
    <div class="row carousel-height">
        <div class="cover-image carousel-height" style="background: url('{{ URL::to('img/placeholders/placeholder-1.jpg') }}'); width: 100%; padding-top: 25%;">
            <form class="form-group" action="/dash-frps/frpsOfficePartitioning" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input class="btn btn-primary" type="file" name="1-OfficePart-img-1">
                <br>
                <input class="form-control" type="text" name="1-OfficePart-h1-1" placeholder="Page Introduction Heading">
                <br>
                <textarea class="form-control" rows="8" cols="20" name="1-OfficePart-p-1" placeholder="Page Introduction Body"></textarea>
                <br>
                <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" value="Save">
            </form>
        </div>
    </div>

    <hr>
    <h1 class="text-center">Edit Section II</h1>
    <hr>

    <div class="row">
        <form class="form-group" action="/dash-frps/frpsOfficeSmart" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input class="btn btn-primary" type="file" name="1-OfficeSmart-img-1">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input class="form-control" type="text" name="1-OfficeSmart-h1-1" placeholder="Section 2 Heading">
                <br>
                <textarea class="form-control" rows="8" cols="20" name="1-OfficeSmart-p-1" placeholder="Section 2 Content Body"></textarea>
                <br>
                <input class="form-control" type="text" name="1-OfficeSmart-li-1" placeholder="Section 2 Pointer">
                <br>
                <input class="form-control" type="text" name="1-OfficeSmart-li-2" placeholder="Section 2 Pointer">
                <br>
                <input class="form-control" type="text" name="1-OfficeSmart-li-3" placeholder="Section 2 Pointer">
                <br>
                <input class="form-control" type="text" name="1-OfficeSmart-li-4" placeholder="Section 2 Pointer">
                <br>
            </div>
            <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" value="Save">
        </form>
    </div>
    
    
    <hr>
    <h1 class="text-center">Edit Section III</h1>
    <hr>
    
    <div class="row">
        <form class="form-group" action="/dash-frps/frpsOfficeAll" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input class="form-control" type="text" name="1-OfficeAll-h1-1" placeholder="Section 3 Heading">
                <br>
                <textarea class="form-control" rows="8" cols="20" name="1-OfficeAll-p-1" placeholder="Section 3 Content Body"></textarea>
                <br>
                <input class="form-control" type="text" name="1-OfficeAll-li-1" placeholder="Section 3 Pointer">
                <br>
                <input class="form-control" type="text" name="1-OfficeAll-li-2" placeholder="Section 3 Pointer">
                <br>
                <input class="form-control" type="text" name="1-OfficeAll-li-3" placeholder="Section 3 Pointer">
                <br>
                <input class="form-control" type="text" name="1-OfficeAll-li-4" placeholder="Section 3 Pointer">
                <br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input class="btn btn-primary" type="file" name="1-OfficeAll-img-1">
                <br>
            </div>
            <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" value="Save">
        </form>
    </div>
    
    <hr>
    <h1 class="text-center">Edit Section IV</h1>
    <hr>

    <div class="row">
        <form class="form-group" action="/dash-frps/frpsOfficeComfort" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input class="form-control" type="text" name="1-OfficeComfort-h1-1" placeholder="Section 4 Heading">
            <br>
            <input class="form-control" type="text" name="1-OfficeComfort-h2-1" placeholder="Section 4 Sub Heading">
            <br>
            <textarea class="form-control" rows="8" cols="20" name="1-OfficeComfort-p-1" placeholder="Section 4 Body Content"></textarea>
            <br>
            <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" value="Save">
        </form>
    </div>
    
    
    <hr>
    <h1 class="text-center">Edit Section V</h1>
    <hr>

    <div class="row carousel-height">
        <div class="cover-image carousel-height" style="background: url('{{ URL::to('img/placeholders/placeholder-0.jpg') }}'); width: 100%;">
            <div style="padding-top: 15%">
                <form class="form-group" action="/dash-frps/frpsOfficeDesign" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input class="btn btn-primary" type="file" name="1-OfficeDesign-img-1">
                    <br>
                    <input class="form-control" type="text" name="1-OfficeDesign-h1-1" placeholder="Section 5 Heading">
                    <br>
                    <textarea class="form-control" rows="8" cols="20" name="1-OfficeDesign-p-1" placeholder="Section 5 BOdy Content"></textarea>
                    <br>
                    <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" value="Save">
                </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="row carousel-height">
        <div class="cover-image carousel-height" style="background: url('{{ URL::to('img/placeholders/placeholder-1.jpg') }}'); width: 100%;">
            <div style="padding-top: 15%">
                <form class="form-group" action="/dash-frps/frpsOfficeLuxury" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input class="btn btn-primary" type="file" name="1-OfficeLuxury-img-1">
                    <br>
                    <input class="form-control" type="text" name="1-OfficeLuxury-h1-1" placeholder="Section 5 Heading">
                    <br>
                    <textarea class="form-control" rows="8" cols="20" name="1-OfficeLuxury-p-1" placeholder="Section 5 Body Content"></textarea>
                    <br>
                    <input class="btn btn-primary" style="margin-left: 47%; margin-top: 20px;" value="Save">
                </form>
            </div>
        </div>
    </div>
    <hr>
</div>
@endsection
