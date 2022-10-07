<script src="https://cdn.tiny.cloud/1/a6sxnbcaha12nlwocbyse23canzw8kfzf3f5ojfwxnnnti6u/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

    tinymce.init({
        selector: 'textarea#body', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        toolbar_sticky: true,
        toolbar_sticky_offset: isSmallScreen ? 102 : 57,
        image_advtab: true,
        toolbar_mode: 'sliding',
        apply_source_formatting: true
    });
</script>
