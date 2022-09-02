@extends('layouts.main_post')
@section('styles')
    <link href="css/home.css" rel="stylesheet">
    <style>
        header .list_ico_share_f a {
            color: #052453;
        }

        .txt_dibj {
            color: #052453;
        }

        .menu_head .nav-item a {
            color: #052453;
            padding: 0.35rem 0.9rem !important;
        }

        header {
            background-color: #FFF;
            position: sticky !important;
        }

        .pagination {
            display: none;
        }

        .list_ico_share_f a {
            color: #052453;
        }
    </style>
@endsection

@section('content')
    <!-- Page Header -->
    <div style="margin-top: 100px;"></div>
    @include('layouts.socialIcon')
    <header class="masthead container" {{-- style="background-image: url('{{ asset('/storage/images/posts_images/' . $post['image_url']) }}')"> --}} style="background-image: url('')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1 class="text-center my-3 txt_dibj" style="font-weight: 700;">{{ $post['title'] }}</h1>
                        {{-- <span class="subheading">By {{ $post->user['name'] }}</span> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-3 mb-5">
            <div class="post_category col-md-12">
                <label class="w-100 m-0 txt_dibj" for=""
                    style="text-align: center;font-weight: 600;font-size: 16px;">Specialist</label>
            </div>
            <div class="d-flex justify-content-center">
                <hr class="w-100" style="max-width: 55px;height: 2px;margin: 5px 0 3px 0;">
            </div>
            <div class="post_date col-md-12">
                <label class="w-100 m-0 txt_dibj" style="text-align: center;font-size: 16px;" for="">Jun 01
                    2022</label>
            </div>
        </div>
        <img class="w-100 img-fluid" style="max-height: 550px" src="{{ asset($post['image_url']) }}" alt="MDN">
        <div class="overlay"></div>
    </header>

    <!-- Main Content -->
    <div class="container">

        <div class="col-auto text-center d-flex align-items-center justify-content-center my-5">
            <button type="button" style="background-color: #539bfc;color: #FFF;position: relative;padding-right: 50px;"
                class="btn btn-lg rounded-0">Descargar todos los activos <span class=""
                    style="font-size: 42px;height: 2px;display: inline-block;transform: rotate(90deg);position: absolute;bottom: 20px;right: -15px;">‣</span></button>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p style="">{!! $post['body'] !!}</p>
            </div>
        </div>
        <div class="col-12 my-5 d-flex justify-content-center">
            <div class="col-10 text-center d-flex align-items-center justify-content-between my-5">
                @include('layouts.socialIcon')
                <button type="button" style="background-color: #539bfc;color: #FFF;position: relative;padding-right: 50px;"
                    class="btn btn-lg rounded-0">Descargar todos los activos <span class=""
                        style="font-size: 42px;height: 2px;display: inline-block;transform: rotate(90deg);position: absolute;bottom: 20px;right: -15px;">‣</span></button>
            </div>
        </div>

        <div class="py-5">
            @include('mailing.formulario_suscripcion')
        </div>


        <div class="text-center mt-5">
            <h2 style="color: #052453;font-weight: 700;font-size: 1.77rem;">Notas relacionadas</h2>
        </div>

        <div class="row pb-5">
            @include('posts.entradaRelacionada')
        </div>
    </div>
@endsection
