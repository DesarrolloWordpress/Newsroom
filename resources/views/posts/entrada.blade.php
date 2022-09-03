@foreach ($posts as $post)
    <div class="col-xl-4 col-md-6 my-[2em]">
        <div class="max-h-[270px] h-full">
            <img class="img-thumbnail object-cover mt-5 h-full w-full"
                src="@if ($post->image) {{ Storage::url($post->image->url) }}
                @else
                {{ asset('images/default/img_default.jpg') }} @endif
                "
                alt="post_image">
        </div>
        <div class="">
            <div class="row mt-3">
                <div class="post_category col-md-6">
                    {{-- @foreach ($post->category as $category) --}}
                    <label
                        class="@if ($post->category) text--[{{ $post->category->color }}] @else text--[ncategory] @endif"
                        for="" style="font-weight: 600;font-size: 16px;">
                        @if ($post->category)
                            {{ $post->category->name }}
                        @endif
                    </label>
                    @foreach ($post->tags as $tag)
                        {{-- <label class="" for=""
                            style="font-weight: 600;font-size: 16px;">{{ $tag->name }}
                        </label> --}}
                    @endforeach
                    {{-- @endforeach --}}
                </div>
                <div class="post_date col-md-6">
                    <label class="w-100 m-0" style="text-align: right;font-size: 16px;" for="">Jun 01
                        2022</label>
                </div>
            </div>
            <hr style="max-width: 50px;height: 2px;">
            <div class="">
                <a href="{{ route('post.show', $post) }}">
                    <div class="post_title">
                        <h3 style="font-weight: 600;">
                            {{ $post['name'] }}
                        </h3>
                    </div>
                </a>
                <div class="post_content_ext">
                    <p>
                        {!! substr($post['extract'], 0, 100) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="post_pagination mt-5 pt-3">
    <!-- Pager -->
    {{ $posts->links() }}
</div>
