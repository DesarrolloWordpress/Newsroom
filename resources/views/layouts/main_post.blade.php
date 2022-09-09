@include('layouts.header')
@include('layouts.footer')
@yield('banner-fondo-inicio')
<!-- Main Content -->
<div class="w-full">
    @yield('content')
</div>
@yield('footer')
