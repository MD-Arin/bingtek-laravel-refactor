<div class="container-fluid">
  <nav class="navbar navbar-default navbar-fixed-top">
    <ul class="nav nav-tabs nav-justified">
      <li class="@yield('home-active')" role="presentation"><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"> Home</span></a></li>
      <li class="@yield('about-active')"role="presentation"><a href="{{ route('about') }}"><span class="glyphicon glyphicon-question-sign"> About</span></a></li>
      <li class="@yield('ps-active')" role="presentation" class="dropdown"><a role="button"class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"> Products and Services</span> <span class="caret"></span></a>
        <ul class="navbar-default dropdown-menu">
          <li class="@yield('first-active')" role="presentation"><a href="{{ route('first_ps') }}"><span class="glyphicon glyphicon-cog">{{ $navProducts1li1 }}</span></a></li>
          <li class="@yield('second-active')" role="presentation"><a href="{{ route('second_ps') }}"><span class="glyphicon glyphicon-cog">{{ $navProducts1li2 }}</span></a></li>
          <li class="@yield('third-active')" role="presentation"><a href="{{ route('third_ps') }}"><span class="glyphicon glyphicon-cog">{{ $navProducts1li3 }}</span></a></li>
          <li class="@yield('fourth-active')" role="presentation"><a href="{{ route('fourth_ps') }}"><span class="glyphicon glyphicon-cog">{{ $navProducts1li4 }}</span></a></li>
        </ul>
      </li>
      <li class="@yield('contacts-active')" role="presentation"><a href="{{ route('contacts') }}"><span class="glyphicon glyphicon-envelope"> Contacts</span></a></li>
    </ul>
  </nav>
</div>
