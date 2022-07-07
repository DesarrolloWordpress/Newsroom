<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/dibujables.css') }}" rel="stylesheet">
    <!-- font awesome -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        header .list_ico_share_f a {
            color: #FFF;
        }

        .menu_head {
            border-color: #8793ad !important;
            border-bottom: solid 2px;
            min-height: 73px;
            padding: 5px 0;
        }

        .menu_head .nav-item.active {
            font-weight: 700;
            background-color: #539bfd;
        }

        .menu_head .nav-item {
            margin-right: .9rem;
        }

        .menu_head .nav-item a {
            color: #fff;
            padding: 0.35rem 0.9rem !important;
        }

        .banner_head_home {
            padding-top: 73px;
        }
    </style>
    @yield('styles')
</head>

<body>
    <header class="container-md fixed-top">
        <div class="menu_head row flex-wrap">
            <!-- Navigation -->
            <div class="col-auto me-auto navbar align-items-end">
                <nav class="navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Reyma</a>
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
    </header>
