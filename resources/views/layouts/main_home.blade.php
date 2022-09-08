@include('layouts.header')
@include('layouts.footer')
@yield('banner-fondo-inicio')
<!-- Main Content -->
<div class="w-full flex justify-center">
    @yield('content')
</div>
@yield('footer')
