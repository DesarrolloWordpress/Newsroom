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

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título del post']) !!}

                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post']) !!}

                @error('slug')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categoria') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

                @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <p class="font-weight-bold">Etiquetas</p>
                @foreach ($tags as $tag)
                    <label class="mr-2">
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{ $tag->name }}
                    </label>
                @endforeach
                @error('tags')
                    <br>
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <p class="font-weight-bold">Estado</p>
                <label>
                    {!! Form::radio('status', 1, true) !!}
                    Borrador
                </label>
                <label class="mr-2">
                    {!! Form::radio('status', 2, true) !!}
                    Publicado
                </label>

                @error('status')
                    <br>
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="row">
                <div class="col">
                    <img id="pic_portada_post" class="img-thumbnail img-wrapper object-cover mt-5 h-full w-full"
                        src=" {{ asset('images/default/img_default.jpg') }}" alt="post_image">
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen de portada de post') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                    </div>


                    @error('file')
                        <br>
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('extract', 'Extracto') !!}
                {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

                @error('extract')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Cuerpo del post') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                @error('body')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {!! Form::submit('Crear post', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .img-wrapper {}
    </style>
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#extract'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor.create(document.querySelector('#body')).catch(error => {
            console.error(error);
        });

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
