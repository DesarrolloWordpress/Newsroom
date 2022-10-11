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
    <div class="max-w-screen-xl mx-auto post-view">
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
                <img draggable="false" class="mt-5 object-cover aspect-[3/1.3] w-full"
                    src="@if ($post->image) {{ Storage::url($post->image->url) }}
                @else
                {{ asset('images/default/img_default.jpg') }} @endif"
                    alt="post_image">
            </div>
            <div class="mt-14 flex justify-center">
                @can('user.post.descargar.si')
                    <a href="{{ Storage::url($post->file->url) }}" title="Download all files"
                        download="{{ $post->file->name }}.{{ $post->file->extension }}"
                        class="px-7 py-3 bg-[#539bfc] text-white">
                        Descargar todos los activos
                        <i class="ml-5 fa-sharp fa-solid fa-caret-down"></i>
                    </a>
                @else
                    <div class="ml-3 relative" x-data="{ open: false }">
                        <a x-on:click="open = true" title="Download all files"
                            download="{{ $post->file->name }}.{{ $post->file->extension }}"
                            class="px-7 py-3 bg-[#539bfc] text-white">
                            Descargar todos los activos
                            <i class="ml-5 fa-sharp fa-solid fa-caret-down"></i>
                        </a>
                        <div x-show="open" x-on:click.away="open = false" class="bg-[#052453] menu_head">
                            <a href="{{ route('register') }}"
                                class="pt-5 pb-3 transition-all duration-300 block text-center px-4 py-2 text-lg font-bold text-white"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Registrarse</a>
                        </div>
                    </div>
                @endcan
            </div>
        </div>
        <div class="ck-content my-20 px-28 view-cont delay">
            <!-- Main Content -->
            {!! $post->body !!}
        </div>
        <div class="flex justify-between">
            <div class="flex items-center">
                @include('layouts.socialIcon')
            </div>
            <div>
                @can('user.post.descargar.si')
                    <a href="{{ Storage::url($post->file->url) }}" title="Download all files"
                        download="{{ $post->file->name }}.{{ $post->file->extension }}"
                        class="px-7 py-3 bg-[#539bfc] text-white">
                        Descargar todos los activos
                        <i class="ml-5 fa-sharp fa-solid fa-caret-down"></i>
                    </a>
                @else
                    <div class="ml-3 relative" x-data="{ open: false }">
                        <a x-on:click="open = true" title="Download all files"
                            download="{{ $post->file->name }}.{{ $post->file->extension }}"
                            class="px-7 py-3 bg-[#539bfc] text-white">
                            Descargar todos los activos
                            <i class="ml-5 fa-sharp fa-solid fa-caret-down"></i>
                        </a>
                        <div x-show="open" x-on:click.away="open = false" class="pt-5 pb-3 bg-[#052453] menu_head">
                            <a href="{{ route('register') }}" class="block text-center px-4 py-2 text-lg font-bold text-white"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Registrarse</a>
                        </div>
                    </div>
                @endcan
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

@section('scripts')
    <script src="https://newsroom.test/vendor/ckeditor5-35.1.0/build/ckeditor.js"></script>
@endsection
