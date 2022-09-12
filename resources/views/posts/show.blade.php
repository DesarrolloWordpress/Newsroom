@extends('layouts.main_post')
@section('styles')
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

        .list_ico_share_f a {
            color: #052453;
        }
    </style>
@endsection

@section('content')
    <div class="mt-24"></div>
    <div class="max-w-screen-xl mx-auto">
        <div>
            <!-- Page Header -->
            <div>
                @include('layouts.socialIcon')
            </div>
            <div class="mt-10 container">
                <h1 class="my-3 text-center text-5xl" style="font-weight: 700;">{{ $post->name }}</h1>
            </div>
            <div class="mt-10 flex flex-col items-center">
                <div class="text-sm font-bold">
                    <label>{{ $post->category->name }}</label>
                </div>
                <div class="flex flex-col items-center">
                    <hr class="mx-7 my-2 w-full max-w-[55px] border border-[#858b97]">
                </div>
                <div class="text-sm ">
                    <label>{{ $post->created_at->format('M d, Y') }}</label>
                </div>
            </div>
            <div class="mt-14">
                <img class="mt-5 object-cover aspect-[3/1.3] w-full"
                    src="@if ($post->image) {{ Storage::url($post->image->url) }}
                @else
                {{ asset('images/default/img_default.jpg') }} @endif
                "
                    alt="post_image">
            </div>
            <div class="mt-14 flex justify-center">
                <button type="button" class="px-7 py-3 bg-[#539bfc] text-white">
                    Descargar todos los activos
                    <i class="ml-5 fa-sharp fa-solid fa-caret-down"></i>
                </button>
            </div>
        </div>
        <div class="my-20">
            <!-- Main Content -->
            {!! $post->body !!}
        </div>
        <div class="flex justify-between">
            <div class="flex items-center">
                @include('layouts.socialIcon')
            </div>
            <div>
                <button type="button" class="px-7 py-3 bg-[#539bfc] text-white">
                    Descargar todos los activos
                    <i class="ml-5 fa-sharp fa-solid fa-caret-down"></i>
                </button>
            </div>
        </div>
        <div class="my-20">
            <!-- Emailing -->
            @include('mailing.formulario_suscripcion')
        </div>
        <div class="mt-14">
            <!-- Related post -->
            @include('posts.entradaRelacionada')
        </div>
    </div>
@endsection
