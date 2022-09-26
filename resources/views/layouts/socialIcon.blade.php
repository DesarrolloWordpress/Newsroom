<div class="flex flex-row justify-center">
    <p>Compartir en: </p>
    <div class="ml-1">
        <div class="socials">
            <div class="d-inline">
                <ul class="flex justify-center">
                    <li data-href="https://newsroom.test/post/quos-sunt-quas-in-non-neque" data-layout="button_count"
                        class="list_ico_share_f min-w-[30px] flex justify-center items-center aspect-square ml-1 border-transparent border-b-2 hover:border-blue-400">
                        <a class="flex justify-center items-center text-lg"data-tooltip="Facebook" target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}&amp;src=sdkpreparse"
                            class="fb-xfbml-parse-ignore">
                            <i class="fa-brands fa-facebook-square"></i>
                        </a>
                    </li>
                    <li
                        class="list_ico_share_f min-w-[30px] flex justify-center items-center aspect-square ml-1 border-transparent border-b-2 hover:border-blue-400">
                        <a class="flex justify-center items-center text-lg" data-tooltip="LinkedIn" target="_blank"
                            href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&amp;title=">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li
                        class="list_ico_share_f min-w-[30px] flex justify-center items-center aspect-square ml-1 border-transparent border-b-2 hover:border-blue-400">
                        <a class="flex justify-center items-center text-lg" data-tooltip="Twitter" target="_blank"
                            href="https://twitter.com/share?url={{ url()->current() }}" data-show-count="false">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- @section('scripts')
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v14.0"
        nonce="gtLHfh7R"></script>
@endsection --}}
