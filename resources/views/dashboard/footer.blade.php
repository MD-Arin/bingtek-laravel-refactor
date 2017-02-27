@extends('layouts.dash')

@section('title', 'Edit Footer')

@section('edit-footer-active','active')

@section('dash-content')
<div class="container-fluid">
    <hr>
    <h1 class="text-center">Edit Footer</h1>
    <hr>
    <div class="row">
        <form class="form-group" action="/dash-footer/footerLocation" method="POST">
            {{ csrf_field() }}
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input class="form-control" type="text" name="1-footerLocation-li-1" placeholder="Edit City">
                <br>
                <input class="form-control" type="text" name="1-footerLocation-li-2" placeholder="Edit Street">
                <br>
                <input class="form-control" type="text" name="1-footerLocation-li-3" placeholder="Edit Building">
                <br>
                <input class="form-control" type="text" name="1-footerLocation-li-4" placeholder="Edit Floor">
                <br>
                <input class="form-control" type="text" name="1-footerLocation-li-5" placeholder="Edit Room">
                <br>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <input class="form-control" type="text" name="1-footerLocation-facebook" placeholder="Paste Your Facebook Page Link Here">
                <br>
                <input class="form-control" type="text" name="1-footerLocation-twitter" placeholder="Paste Your Twitter Page Link Here">
            </div>
            <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px; margin-bottom: 20px;" value="Save">
            <br>
        </form>
    </div>
    <hr>
    <h1 class="text-center">Edit Company Contacts</h1>
    <hr>
    <div class="row">
        <form class="form-group" action="/dash-footer/footerMobile" method="POST">
            {{ csrf_field() }}
            <input class="form-control" type="number" name="1-footerMobile-1" placeholder="Edit First Company Telephone/Mobile Number">
            <br>
            <input class="form-control" type="number" name="1-footerMobile-2" placeholder="Edit Second Company Telephone/Mobile Number">
            <br>
            <input class="form-control" type="number" name="1-footerMobile-3" placeholder="Edit Third Company Telephone/Mobile Number">
            <br>
            <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px; margin-bottom: 20px;" value="Save">
        </form>
    </div>
</div>
@endsection

