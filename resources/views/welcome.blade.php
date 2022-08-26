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
        <div class="banner_head_home w-100">
            <div class="container-md" style="color: #FFF">
                <div class="col-auto d-flex justify-content-center">
                    <div class="col-auto cont_img_b d-flex justify-content-end">
                        <img src="{{ asset('images/home/reyma_logo.png') }}" style="max-width: 230px" />
                    </div>
                    <div class="mx-4" style="border-left:1px solid #FFF;"></div>
                    <h2 class="col-auto text-left titulo_head_home my-4"> Newsroom </h2>
                </div>
                <div class="row justify-content-center my-3 pt-5">
                    <h5 class="text-center mb-4" style="font-size: 2.3rem;font-weight: 700;">Bienvenido</h5>
                    <p class="txt_font text-center col-md-6">Recibe antes que nadie las noticias relaciondas con los
                        produtos <span class="txt_bold">REYMA</span>.</p>
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
