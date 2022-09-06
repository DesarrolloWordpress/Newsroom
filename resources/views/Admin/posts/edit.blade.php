@extends('adminlte::page')

@section('title', 'Dashboard - Newsroom')

@section('plugins.stringToSlug', true)

@section('content_header')
    <h1>Editar nuevo Post</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'files' => true, 'method' => 'put']) !!} {{-- , 'autocomplete' => 'off' --}}

            {{-- {!! Form::hidden('user_id', auth()->user()->id) !!} --}}

            @include('admin.posts.partials.form')

            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('js')
    <script src="{{ asset('vendor/ckeditor5-35.1.0/build/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor5-35.1.0/build/_ckeditor-asignacion.js') }}"></script>

    <script>
        /**
         * Cambio de imagen
         */
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("pic_portada_post").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@stop
