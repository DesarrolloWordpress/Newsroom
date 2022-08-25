@foreach ($posts as $post)
    <div class="col-xl-4 col-md-6">
        <div class="">
            {{-- <img class="img-fluid" src="http://placeimg.com/450/270" alt="img_pruebas"> --}}
            <img class="img-thumbnail mt-5" width="100%" src="{{ asset($post['image_url']) }}" alt="post_image">
        </div>
        <div class="">
            <div class="row mt-3">
                <div class="post_category col-md-6">
                    {{-- @foreach ($post->category as $category) --}}
                    <label class="" for=""
                        style="font-weight: 600;font-size: 16px;">{{ $post->category->name }}
                    </label>
                    <label class="" for="" style="font-weight: 600;font-size: 16px;">{{ $post }}
                    </label>
                    {{-- @endforeach --}}
                </div>
                <div class="post_date col-md-6">
                    <label class="w-100 m-0" style="text-align: right;font-size: 16px;" for="">Jun 01
                        2022</label>
                </div>
            </div>
            <hr style="max-width: 50px;height: 2px;">
            <div class="">
                <a href="/home/{{ $post['id'] }}">
                    <div class="post_title">
                        <h3 style="font-weight: 600;">
                            {{ $post['title'] }}
                        </h3>
                    </div>
                </a>
                <div class="post_content_ext">
                    <p>
                        {!! substr($post['content'], 0, 100) !!}
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
