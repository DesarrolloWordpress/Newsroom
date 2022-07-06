@extends('layouts.main_home')
@section('styles')
    <link href="css/home.css" rel="stylesheet">
    <style>
    </style>
@endsection
@section('scripts')
    <script></script>
@endsection
@section('banner-fondo-inicio')
    <div class="banner_head_home w-100 py-5" style="background-color: #091e41">
        <div class="container my-5" style="color: #FFF">
            <h2 class="titulo_head_home text-center">Newsroom</h2>
            <div class="cont_img_b d-flex justify-content-center">
                <img src="{{ asset('images/home/reyma_logo.png') }}" style="max-width: 400px" />
            </div>
            <div class="my-5">
                <p class="txt_font text-center">Bienvenido a nuestro NEWSROOM, donde encontrarás todo lo relacionado con los
                    productos
                    de
                    REYMA, actividades e informaión que te serán de gran utilidad.</p>
            </div>
            <div class="input-group rounded pt-5 justify-content-center">
                <input type="search" class="form-control rounded bg-transparent" placeholder="Buscar" aria-label="Search"
                    aria-describedby="search-addon" style="max-width: 320px" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <h2 class="h-100">Contenido</h2>
@endsection
