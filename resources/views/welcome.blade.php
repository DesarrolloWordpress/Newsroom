@extends('layouts.main_home')
@section('styles')
    <link href="css/home.css" rel="stylesheet">
    <style>
    </style>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        (function($) {
            $(document).ready(function() {
                window.onscroll = function() {
                    headersolid()
                };

                function headersolid() {
                    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                        $('header').addClass("active");
                    } else {
                        $('header').removeClass("active");
                    }
                }
            });

        })(jQuery);
    </script>
@endsection
@section('banner-fondo-inicio')
    <div
        style="background-image: URL('{{ asset('images/home/instalaciones_banderas.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
        <div class="banner_head_home w-100" style="background-color: #052453; opacity: 0.9;">
            <div class="container-md" style="color: #FFF">
                <h2 class="titulo_head_home text-center my-4">Newsroom</h2>
                <div class="cont_img_b d-flex justify-content-center">
                    <img src="{{ asset('images/home/reyma_logo.png') }}" style="max-width: 400px" />
                </div>
                <div class="my-5 d-flex justify-content-center">
                    <p class="txt_font text-center col-md-6">Bienvenido a nuestro NEWSROOM, donde encontrarás todo lo
                        relacionado con los productos de REYMA, actividades e informaión que te serán de gran utilidad.</p>
                </div>
                <div class="input-group rounded pt-5 justify-content-center buscador_newsroom">
                    <input type="search" class="form-control rounded bg-transparent" placeholder="Buscar"
                        aria-label="Search" aria-describedby="search-addon" style="max-width: 320px" />
                    <span class="input-group-text" id="search-addon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-md">
        <div class="row">
            @include('entradas.entrada')
        </div>
        <ul>
            @foreach ($posts as $post)
                <li>
                    {{ $post->title }}
                </li>
            @endforeach
        </ul>
        <div>
            @include('mailing.formulario_suscripcion')
        </div>
        <div>
            @include('informacion')
        </div>
    </div>
@endsection
