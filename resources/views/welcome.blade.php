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
                        <img class="max-w-[230px] object-contain" src="{{ asset('images/home/reyma_logo.png') }}" />
                    </div>
                    <div class="mx-4 border-l-[1px] border-l-[#FFF]"></div>
                    <h2 class="my-4 text-8xl font-bold flex items-center"> Newsroom </h2>
                </div>
                <div class="my-16">
                    <h5 class="mb-4 text-4xl font-bold text-center">Bienvenido</h5>
                    <p class="text-lg text-center md:max-w-2lg">Recibe antes que nadie las noticias relaciondas con los
                        produtos <span class="font-bold">REYMA</span>.</p>
                </div>
                <div class="pt-5">
                    <div class="px-2 pb-2 mx-auto flex justify-center border-b-2 border-b-[#8793ad] max-w-2xl">
                        <input type="search" class="px-2 rounded bg-transparent w-full" placeholder="Buscar"
                            aria-label="Search" aria-describedby="search-addon" />
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
    <div class="2xl:container flex justify-center flex-wrap">
        <div class="flex flex-wrap flex-row justify-center">
            <div class="my-5 pb-5 grid grid-cols-3 gap-5 max-w-screen-xl">
                @include('posts.entrada')
            </div>
            <div class="mb-20 pt-3">
                <!-- Pager -->
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>
        <div class="max-w-screen-xl">
            @include('mailing.formulario_suscripcion')
        </div>
        <div class="my-28 py-5 max-w-screen-xl">
            @include('informacion')
        </div>
    </div>
@endsection
