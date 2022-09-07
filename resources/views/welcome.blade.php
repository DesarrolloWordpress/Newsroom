@extends('layouts.main_home')
@section('styles')
    <link href="css/home.css" rel="stylesheet">
    <style>
        header .list_ico_share_f a {
            color: #FFF;
        }

        .menu_head .nav-item a {
            color: #fff;
            padding: 0.35rem 0.9rem !important;
        }

        .menu_head .nav-item.active {
            font-weight: 700;
            background-color: #539bfd;
        }
    </style>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        (function($) {
            $(document).ready(function() {
                headersolid();
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
    <div class="px-3"
        style="background-image: URL('{{ asset('images/home/instalaciones_banderas.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
        <div class="py-[73px] w-100">
            <div class="my-[130px] text-[#FFF] mx-auto container flex flex-col">
                <div class="flex justify-center">
                    <div class="flex justify-end">
                        <img class="max-w-[230px] img-thumbnail object-contain"
                            src="{{ asset('images/home/reyma_logo.png') }}" />
                    </div>
                    <div class="mx-4 border-l-[1px] border-l-[#FFF]"></div>
                    <h2 class="my-4 text-8xl font-bold flex items-center"> Newsroom </h2>
                </div>
                <div class="my-3 pt-5 flex-row justify-center">
                    <h5 class="mb-4 text-4xl font-bold text-center">Bienvenido</h5>
                    <p class="text-lg text-center md:max-w-2lg">Recibe antes que nadie las noticias relaciondas con los
                        produtos <span class="font-bold">REYMA</span>.</p>
                </div>
                <div class="pt-5">
                    <div class="mx-auto flex justify-center">
                        <input type="search" class="rounded bg-transparent" placeholder="Buscar" aria-label="Search"
                            aria-describedby="search-addon" style="max-width: 320px" />
                        <span class="" id="search-addon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-md">
        <div class="row my-5 pb-5">
            @include('posts.entrada')
        </div>
        <div>
            @include('mailing.formulario_suscripcion')
        </div>
        <div class="my-5 py-5">
            @include('informacion')
        </div>

    </div>
@endsection
