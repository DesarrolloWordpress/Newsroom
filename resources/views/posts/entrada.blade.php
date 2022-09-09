@foreach ($posts as $post)
    <div class="my-[2em]">
        <x-postcard postid='{{ $post->id }}'></x-postcard>
    </div>
@endforeach
