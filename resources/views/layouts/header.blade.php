<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css', 'app') }}"> --}}
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        header,
        header .list_ico_share_f a,
        .menu_head .nav-item a,
        .menu_head {
            -webkit-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .menu_head {
            border-color: #8793ad !important;
            border-bottom: solid 2px;
            min-height: 73px;
            padding: 5px 0;
        }

        .menu_head .nav-item {
            margin-right: .9rem;
        }

        /* onScroll */
        header.active {
            background-color: #FFF;
            border-color: #8793ad !important;
            border-bottom: solid 2px;
        }

        header.active .list_ico_share_f a {
            color: #052453;
        }

        .active .menu_head .nav-item:not(.menu_head .nav-item.active) a {
            color: #052453;
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
        <div class="container-md">
            <div class="menu_head row flex-wrap">
                <!-- Navigation -->
                <div class="col-auto me-auto navbar align-items-end">
                    <nav class="navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"> Inicio <span
                                            class="sr-only">{{-- (current) --}}</span></a>
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
        </div>
    </header>
