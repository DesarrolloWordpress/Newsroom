@extends('adminlte::page')

@section('title', 'Dashboard - Newsroom')

@section('plugins.stringToSlug', true)
{{-- @section('plugins.colorpicker', true) --}}

@section('content_header')
    <h1>Editar Categoría</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría']) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del slug']) !!}

                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div id="cp2" class="form-group">
                {!! Form::label('color', 'Color') !!}
                <div class="row position-relative ml-0">
                    {!! Form::text('color', null, [
                        'class' => 'form-control col-1 colorpicker',
                        'placeholder' => 'Ingrese el color del slug: #aabbcc',
                    ]) !!}
                    <span class="position-absolute h-100 input-group-addon col-1"><i
                            class="position-absolute end-0 rounded h-100 overflow-hidden"
                            style="right:0; z-index:9999"></i></span>
                </div>
            </div>

            {!! Form::submit('Actualizar categoría', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop
