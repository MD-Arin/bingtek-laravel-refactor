<div class="nav-sidebar-fixed">
  <ul class="nav nav-sidebar">
    <hr>
    <li class="nav nav_table @yeild('edit-nav-active')">Edit Navigation</li>
    <hr>
    <li><a href="{{ route('dash-nav') }}">Navbar and Top Panel</a></li>
    <li><a href="{{ route('dash-footer') }}">Footer and Bottom Panel</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <hr>
    <li>Edit Pages</li>
    <hr>
    <li class="@yield('edit-home-active')"><a href="{{ route('dashboard') }}">Home Page</a></li>
    <li class="@yield('edit-about-active')"><a href="{{ route('dash-about') }}">About Page</a></li>
    <li class="@yield('edit-contacts-active')"><a href="{{ route('dash-contacts') }}">Contacts Page</a></li>
    <hr>
    <li>Edit Products and Services</li>
    <hr>
    <li class="@yield('edit-fps-active')"><a href="{{ route('dash-fps') }}"></a></li>
    <li class="@yield('edit-sps-active')"><a href="{{ route('dash-sps') }}"></a></li>
    <li class="@yield('edit-tps-active')"><a href="{{ route('dash-tps') }}"></a></li>
    <li class="@yield('edit-frps-active')"><a href="{{ route('dash-frps') }}"></a></li>
  </ul>

</ul>
<ul class="nav nav-sidebar">
  <hr>
  <li class="@yield('edit-themes-active')">Themes</li>
  <hr>
</ul>
</div>
