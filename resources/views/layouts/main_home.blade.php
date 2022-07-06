@include('layouts.header')
@include('layouts.footer')
@yield('banner-fondo-inicio')
<!-- Main Content -->
<div class="container-fluid">
    @yield('content')
    @yield('footer')
