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
        @isset($post->image)
            <img id="pic_portada_post" class="img-thumbnail img-wrapper object-cover mt-5 h-full w-full"
                src=" {{ Storage::url($post->image->url) }}" alt="post_image">
        @else
            <img id="pic_portada_post" class="img-thumbnail img-wrapper object-cover mt-5 h-full w-full"
                src=" {{ asset('images/default/img_default.jpg') }}" alt="post_image">
        @endisset
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

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post') !!}

    <!-- The toolbar will be rendered in this container. -->
    <div id="toolbar-container__body"></div>
    <div class="ck-toolbar__body"></div>

    <!-- This container will become the editable. -->
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
