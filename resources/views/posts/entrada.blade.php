<div class="py-5 flex flex-wrap flex-col items-center">
    @if ($posts->count())
        <div class="my-5 p-5 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5 max-w-screen-xl">
            @foreach ($posts as $post)
                <div class="my-[2em]">
                    <x-postcard postid='{{ $post->id }}'></x-postcard>
                </div>
            @endforeach
        </div>
        <div class="mb-20 pt-3">
            <!-- Pager -->
            {{ $posts->links('pagination::tailwind') }}
        </div>
    @else
        <div class="px-3 my-28">
            <strong>No se encontraron registros</strong>
        </div>
    @endif
</div>
