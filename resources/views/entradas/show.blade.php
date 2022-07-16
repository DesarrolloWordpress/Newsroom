@extends('layouts.main_post')
@section('styles')
    <link href="css/home.css" rel="stylesheet">
    <style>
        header .list_ico_share_f a {
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
    </style>
@endsection

@section('content')
    <!-- Page Header -->
    <header class="masthead"
        style="background-image: url('{{ asset('/storage/images/posts_images/' . $post['image_url']) }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>{{ $post['title'] }}</h1>
                        <span class="subheading">By {{ $post->user['name'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p style="height: 100vh;">{!! $post['content'] !!}</p>
            </div>
        </div>
    </div>
    <hr>
@endsection
