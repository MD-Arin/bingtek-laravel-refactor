@extends ('layouts.master')

@section('title')
  Dashboard login
@endsection

@section('login-active')
  active
@endsection

@section('content')
<div class="container-sm text-center">
  <div class="row">
    <form action="" method="post">
      <div class="row margin-tb">
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1">*</span>
          <input class="form-control" type="text" name="username" placeholder="username">
        </div>
      </div>
      <div class="row margin-tb">
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1">*</span>
          <input class="form-control" type="password" name="password" placeholder="password">
        </div>
      </div>
      <input class="btn btn-primary btn-lg margin-tp" type="submit" name="login" value="Login">
      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
  </div>
</div>

@endsection
