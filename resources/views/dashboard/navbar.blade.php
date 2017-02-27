@extends('layouts.dash')

@section('title', 'Edit Navbar')

@section('edit-nav-active','active')

@section('dash-content')
<div class="container-fluid">
    <div class="row">
        <form class="form-group" action="/dash-nav/navProductsServices" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input class="form-control" type="text" name="1-navProductsServices-li-1" placeholder="First Product Or Service Title">
            <br>
            <input class="form-control" type="text" name="1-navProductsServices-li-2" placeholder="Second Product Or Service Title">
            <br>
            <input class="form-control" type="text" name="1-navProductsServices-li-3" placeholder="Third Product Or Service Title">
            <br>
            <input class="form-control" type="text" name="1-navProductsServices-li-4" placeholder="Fourth Product Or Service Title">
            <br>
            <input class="btn btn-primary" type="submit" style="margin-left: 47%; margin-top: 20px;" value="Save">
        </form>
    </div>
</div>
@endsection

