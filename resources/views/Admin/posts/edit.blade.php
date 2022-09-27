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
    <script>
        /**
         * Nombre a Slug
         */
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

    <script src="{{ asset('vendor/ckeditor5-35.1.0/build/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#extract'), {
                toolbar: {
                    items: [
                        // 'heading',
                        // '|',
                        // 'fontFamily',
                        // 'fontSize',
                        // 'subscript',
                        // 'superscript',
                        'removeFormat',
                        '|',
                        // 'fontColor',
                        // 'fontBackgroundColor',
                        '|',
                        'bold',
                        'italic',
                        'underline',
                        'strikethrough',
                        // '|',
                        // 'alignment',
                        // '|',
                        // 'numberedList',
                        // 'bulletedList',
                        '|',
                        // 'outdent',
                        // 'indent',
                        // '|',
                        //'todoList',
                        // 'link',
                        // 'blockQuote',
                        // '|',
                        // 'horizontalLine',
                        // '|',
                        // 'insertTable',
                        // '|',
                        //'imageUpload',
                        // 'imageInsert',
                        // 'mediaEmbed',
                        // '|',
                        'findAndReplace',
                        '|',
                        'undo',
                        'redo',
                    ]
                },
                removePlugins: ["MediaEmbedToolbar"]
            })
            .then(editor => {
                window.editor = editor;

                // Set a custom container for the toolbar.
                // document.querySelector('#toolbar-container__extract').appendChild(editor.ui.view.toolbar.element);
                // document.querySelector('.ck-toolbar__extract').classList.add('ck-reset_all');
            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error(
                    'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                );
                console.error(error);
            });

        ClassicEditor.create(document.querySelector('#body'), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        //'fontFamily',
                        'fontSize',
                        //'subscript',
                        //'superscript',
                        'removeFormat',
                        '|',
                        'fontColor',
                        //'fontBackgroundColor',
                        '|',
                        'bold',
                        'italic',
                        'underline',
                        'strikethrough',
                        '|',
                        'alignment',
                        '|',
                        'numberedList',
                        'bulletedList',
                        '|',
                        'outdent',
                        'indent',
                        '|',
                        //'todoList',
                        'link',
                        'blockQuote',
                        '|',
                        'horizontalLine',
                        '|',
                        'insertTable',
                        '|',
                        'imageUpload',
                        'imageInsert',
                        'mediaEmbed',
                        '|',
                        'findAndReplace',
                        '|',
                        'undo',
                        'redo',
                    ]
                },
                removePlugins: ["MediaEmbedToolbar"],
                simpleUpload: {
                    // The URL that the images are uploaded to.
                    uploadUrl: '{{ route('admin.image.upload') }}',
                }
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error(
                    'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                );
                console.error(error);
            });
    </script>

    <script>
        /**
         * Previsualización de imagen
         */
        document.getElementById("file_image").addEventListener('change', cambiarImagen);

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
