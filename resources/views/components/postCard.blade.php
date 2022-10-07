<div class="max-h-[270px] h-full">
    <img draggable="false" class="mt-5 object-cover h-full w-full"
        src="@if ($post->image) {{ Storage::url($post->image->url) }}
        @else
        {{ asset('images/default/img_default.jpg') }} @endif
        "
        alt="post_image">
</div>
<div class="">
    <div class="my-3 flex">
        <div class="text-sm text-start w-1/2">
            <label
                class="font-bold @if ($post->category) text-[{{ $post->category->color }}] @else text--[ncategory] @endif">
                @if ($post->category)
                    {{ $post->category->name }}
                @endif
            </label>
            {{-- @foreach ($post->tags as $tag)
                <label class="" for=""
                    style="font-weight: 600;font-size: 16px;">{{ $tag->name }}
                </label>
            @endforeach --}}
        </div>
        <div class="text-sm text-end w-1/2">
            <label class="w-full">{{ $post->created_at->format('M d, Y') }}</label>
        </div>
    </div>
    <hr class="max-w-[50px] border-0 border-t-2 border-[rgb(184,184,184)]">
    <div>
        <a href="{{ route('post.show', $post) }}">
            <div class="h-[4rem] font-bold my-4 text-2xl text-[#052453] hover:text-[#569bfa]">
                <h3 class="paragraph_overflow_ellipsis_2">
                    {{ strip_tags($post->name) }}
                </h3>
            </div>
        </a>
        <div class="text-base">
            <p>
                {!! strip_tags(substr($post->body, 0, 250)) !!}
            </p>
        </div>
    </div>
</div>
