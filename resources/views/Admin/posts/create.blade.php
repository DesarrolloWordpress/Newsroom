@extends('adminlte::page')

@section('title', 'Dashboard - Newsroom')

@section('plugins.stringToSlug', true)


@section('content_header')
    <h1>Crear nuevo Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'files' => true]) !!} {{-- , 'autocomplete' => 'off' --}}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('admin.posts.partials.form')

            {!! Form::submit('Crear post', ['class' => 'btn btn-primary']) !!}

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
