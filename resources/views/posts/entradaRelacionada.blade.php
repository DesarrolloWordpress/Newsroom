@foreach ($relacionados as $relacionado)
    <div class="col-xl-4 col-md-6">
        <div class="max-h-[270px] h-full">
            {{-- <img class="img-fluid" src="http://placeimg.com/450/270" alt="img_pruebas"> --}}
            <img class="img-thumbnail object-cover mt-5 h-full w-full" src="{{ Storage::url($relacionado->image->url) }}"
                alt="post_image">
        </div>
        <div class="">
            <div class="row mt-3">
                <div class="post_category col-md-6">
                    <label class="" for="" style="font-weight: 600;font-size: 16px;">Specialist</label>
                </div>
                <div class="post_date col-md-6">
                    <label class="w-100 m-0" style="text-align: right;font-size: 16px;" for="">Jun 01
                        2022</label>
                </div>
            </div>
            <hr style="max-width: 50px;height: 2px;">
            <div class="">
                <a href="{{ $relacionado['id'] }}">
                    <div class="post_title">
                        <h3 style="font-weight: 600;">
                            {{ $relacionado['name'] }}
                        </h3>
                    </div>
                </a>
                <div class="post_content_ext">
                    <p>
                        {!! substr($relacionado['content'], 0, 100) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
