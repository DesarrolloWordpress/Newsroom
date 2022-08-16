<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css', 'app') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/dibujables.css') }}" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        header>nav,
        header.active>nav,
        .menu_head .space-x-4> :not([hidden])~ :not([hidden]),
        .active .menu_head .space-x-4> :not([hidden])~ :not([hidden]) {
            -webkit-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        .menu_head {
            min-height: 50px;
            padding: 5px 0;
        }

        .menu_head .nav-item {
            margin-right: .9rem;
        }

        /* onScroll */

        header.active>nav {
            border-color: #8793ad !important;
            background-color: #FFF;
            border-bottom: solid 2px;
        }


        header.active .list_ico_share_f a {
            color: #052453;
        }

        .active .menu_head .space-x-4> :not([hidden])~ :not([hidden]) {
            color: #052453;
        }

        .bg-azul3 {
            background-color: #052453;
        }

        .active .menu_head {
            border-bottom: none;
        }

        /* end onScroll */

        .banner_head_home {
            padding-top: 73px;
        }
    </style>
    @yield('styles')
</head>

<body>
    <header class="fixed-top">
        @livewire('navigation');
        {{-- <div class="container-md">
            <div class="menu_head row flex-wrap">
                <!-- Navigation -->
                <div class="col-auto me-auto navbar align-items-end">
                    <nav class="navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"> Inicio <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://reyma.com.mx/" target="_blank">Reyma</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Contáctanos</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- Social Share -->
                <div class="col-auto text-center d-flex align-items-end">
                    <div class="row d-flex justify-content-center">
                        <div class="socials">
                            @include('layouts.socialshare')
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </header>
