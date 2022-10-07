@extends('layouts.main_home')

@section('styles')
    @livewireStyles
    <style>
        header .list_ico_share_f a {
            color: #FFF;
        }

        .menu_head>div a {
            color: #fff;
            padding: 0.35rem 0.9rem !important;
        }

        /* Hacer esto dinamico :x */
        .menu_head>div> :first-child {
            font-weight: 700;
            background-color: #539bfd;
        }
    </style>
@endsection
@section('scripts')
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        var e = window.event;
        /*pauseEvent(e);

        document.querySelectorAll("#testo").forEach(e => (e.onclick = pauseEvent))

        function pauseEvent(e) {
            console.log(e);
            if (e.stopPropagation) e.stopPropagation();
            if (e.preventDefault) e.preventDefault();
            e.cancelBubble = true;
            e.returnValue = false;
            return false;
        }*/
    </script>
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
    <script>
        // $("#search").on("click", function(event) {
        // });
        $('#search').click(function(e) {
            $("#search_form").submit();
            e.preventDefault();
        });
    </script>
@endsection
@section('banner-fondo-inicio')
    <div class="px-3"
        style="background-image: URL('{{ asset('images/home/instalaciones_banderas.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
        <div class="py-[73px] w-100">
            <div class="my-[130px] text-[#FFF] mx-auto container flex flex-col">
                <div class="flex justify-center">
                    <div class="flex justify-end">
                        <img id="testo" class="max-w-[230px] object-contain"
                            src="{{ asset('images/home/reyma_logo.png') }}" />
                    </div>
                    <div class="mx-4 border-l-[1px] border-l-[#FFF]"></div>
                    <h2 class="my-4 text-8xl font-bold flex items-center"> Newsroom </h2>
                </div>
                <div class="my-16">
                    <h5 class="mb-4 text-4xl font-bold text-center">Bienvenido</h5>
                    <p class="text-2xl text-center md:max-w-2lg">
                        Recibe antes que nadie las noticias relacionadas con los produtos <span
                            class="font-bold">REYMA</span>.
                    </p>
                </div>
                <div class="pt-5">
                    <div class="px-2 pb-2 mx-auto flex justify-center border-b-2 border-b-[#8793ad] max-w-lg">
                        {!! Form::open(['id' => 'search_form', 'class' => 'w-full flex col', 'method' => 'GET']) !!}

                        {!! Form::search('search', null, [
                            'class' => 'px-2 rounded bg-transparent w-full',
                            'placeholder' => 'Buscar',
                        ]) !!}

                        <span class="" id="search-addon">
                            <i class="p-3.5 relative fa-solid fa-magnifying-glass hover:bg-[#3b85ec]">
                                {!! Form::button('', [
                                    'class' => 'p-3.5 top-0 left-0 absolute w-full fa-solid fa-magnifying-glass cursor-pointer',
                                    'id' => 'search',
                                ]) !!}
                            </i>
                        </span>
                        {!! Form::close() !!}

                        {{-- ### --}}
                        {{-- <input type="search" class="my-[1px] px-2 rounded bg-transparent w-full" placeholder="Buscar"
                            aria-label="Search" aria-describedby="search-addon" />
                        <span class="" id="search">
                            <i
                                class="p-3.5 relative fa-solid fa-magnifying-glass transition duration-300  cursor-pointer hover:bg-[#3b85ec]">
                            </i>
                        </span> --}}
                        {{-- ### --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="2xl:container flex justify-center flex-wrap">
        @livewire('finder-home')
        <div class="max-w-screen-xl">
            @include('mailing.formulario_suscripcion')
        </div>
        <div class="my-28 py-5  ">
            @include('informacion')
        </div>
    </div>
@endsection
