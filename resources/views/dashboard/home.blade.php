@extends('layouts.dash')

@section('title', 'Dashboard')

@section('edit-home-active', 'active')

@section('dash-content')
<form action="/dashboard" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <input class="form-control" name="company-name" type="text" placeholder="Company Name">
        <br>
        <input class="form-control" type="text" name="company-slogan" placeholder="Company Slogan" >
        <input class="btn btn-primary" type="file" name="cover-image" >
        <input class="btn btn-primary" type="submit" name="Submit">
    </div>
</form>
@endsection
