@extends('adminlte::page')

@section('title', 'Dashboard - Newsroom')

@section('plugins.stringToSlug', true)
@section('plugins.colorpicker', true)

@section('content_header')
    <h1>Crear nueva Categoría</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tags.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría']) !!}
                <p>El nombre es como aparece en tu sitio.</p>

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del slug']) !!}
                <p>El "slug" es la versión amigable de la URL para el nombre. Suele estar todo en minúsculas y contiene solo
                    letras, números y guiones.</p>

                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div id="cp2" class="form-group">
                {!! Form::label('color', 'Color') !!}
                <div class="row position-relative ml-0">
                    {!! Form::text('color', '#012056', [
                        'class' => 'form-control col-1 colorpicker',
                        'placeholder' => 'Ingrese el color del slug: #aabbcc',
                    ]) !!}
                    <span class="position-absolute h-100 input-group-addon col-1"><i
                            class="position-absolute end-0 rounded h-100 overflow-hidden"
                            style="right:0; z-index:9999"></i></span>
                </div>
            </div>

            {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
