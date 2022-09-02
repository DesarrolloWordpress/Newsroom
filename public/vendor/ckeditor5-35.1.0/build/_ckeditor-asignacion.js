ClassicEditor
    .create(document.querySelector('#extract'), {
        licenseKey: '',
        toolbar: [
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
        ],
        removePlugins: ["MediaEmbedToolbar"],
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
    licenseKey: '',
    balloonToolbar: {
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
        ],
        shouldNotGroupWhenFull: true
    },
    removePlugins: ["MediaEmbedToolbar"],
})
    .then(editor => {
        window.editor = editor;

        // Set a custom container for the toolbar.
        // document.querySelector('#toolbar-container__body').appendChild(editor.ui.view.toolbar.element);
        // document.querySelector('#ck-toolbar__bodyct').classList.add('ck-reset_all');
    })
    .catch(error => {
        console.error('Oops, something went wrong!');
        console.error(
            'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
        );
        console.error(error);
    });

$(document).ready(function () {
    var contenedorck = document.querySelectorAll('.ck.ck-content.ck-editor__editable > *');
    contenedorck.style.maxWidth = '1024px;';
    contenedorck.style.margin = '0 auto;';
});