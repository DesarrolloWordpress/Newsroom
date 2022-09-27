@extends('layouts.admin.posts.post')

@section('layer1')
    <x-admin.card titulo="Nombre">
        <div class="form-group">
            {{-- {!! Form::label('name', 'Nombre') !!} --}}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título del post']) !!}

            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </x-admin.card>
    <x-admin.card titulo="Slug">
        <div class="form-group">
            {{-- {!! Form::label('slug', 'Slug') !!} --}}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post']) !!}

            @error('slug')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </x-admin.card>

    <x-admin.card titulo="Imagen de portada">
        <div class="row">
            <div class="col">
                @isset($post->image)
                    <img id="pic_portada_post" class="img-thumbnail img-wrapper object-cover h-full w-full"
                        src=" {{ Storage::url($post->image->url) }}" alt="post_image">
                @else
                    <img id="pic_portada_post" class="img-thumbnail img-wrapper object-cover h-full w-full"
                        src=" {{ asset('images/default/img_default.jpg') }}" alt="post_image">
                @endisset
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('file_image', 'Imagen de portada de post') !!}
                    {!! Form::file('file_image', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                </div>

                @error('file_image')
                    <br>
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </x-admin.card>

    <x-admin.card titulo="Descargar todos los archivos">
        <div class="row">
            <div class="col">
                @isset($post->file)
                    {!! Form::text('file_download', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                @else
                    {!! Form::text('file_download', null, ['class' => 'form-control', 'placeholder' => '']) !!}
                @endisset
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('file_download', 'Documento zip/rar') !!}
                    {!! Form::file('file_download', ['class' => 'form-control-file', 'accept' => '.zip,.rar']) !!}
                </div>

                @error('file_download')
                    <br>
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </x-admin.card>

    {{-- <x-laravel-blade-sortable::sortable name="class-s" wire:onSortOrderChange="handleSortOrderChange"> --}}
    <x-admin.card titulo="Extracto">
        <div class="form-group">
            {!! Form::label('extract', 'Extracto', ['class' => 'd-none']) !!}

            <!-- The toolbar will be rendered in this container. -->
            <div id="toolbar-container__extract"></div>
            <div class="ck-toolbar__extract"></div>

            <!-- This container will become the editable. -->
            {{-- <div class="w-100" id="extract"></div> --}}
            {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

            @error('extract')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </x-admin.card>
    {{-- </x-laravel-blade-sortable::sortable> --}}

    <x-admin.card titulo="Cuerpo del post">
        <div class="form-group">
            {!! Form::label('body', 'Cuerpo del post', ['class' => 'd-none']) !!}

            <!-- The toolbar will be rendered in this container. -->
            <div id="toolbar-container__body"></div>
            <div class="ck-toolbar__body"></div>

            <!-- This container will become the editable. -->
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

            @error('body')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </x-admin.card>
@endsection

@section('layer2')
    <x-admin.card titulo="Publicar">
        <div class="form-group">
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

        <div class="card-body text-right pb-0 pr-0">
            {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}
        </div>
    </x-admin.card>

    <x-admin.card titulo="Categorías">
        <div class="form-group">
            <div class="mr-2" style="max-height: 130px;overflow: auto;">
                @foreach ($categories as $category)
                    <label class="d-block font-weight-normal m-0">
                        {!! Form::radio('category_id', $category->id, null) !!}
                        {{ $category->name }}
                    </label>
                @endforeach
            </div>

            @error('category_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </x-admin.card>

    <x-admin.card titulo="Etiquetas">
        <div class="form-group">
            <div class="mr-2" style="max-height: 130px;overflow: auto;">
                @foreach ($tags as $tag)
                    <label class="d-block font-weight-normal m-0">
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{ $tag->name }}
                    </label>
                @endforeach
            </div>

            @error('tags')
                <br>
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </x-admin.card>
@endsection
