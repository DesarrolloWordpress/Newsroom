<div id="emailing" class="emailing">
    <div class="py-12 2xl:container">
        <div class="">
            <div class="text-center">
                <h2>SUSCRÍBETE A NUESTRO MAILING</h2>
            </div>
            {{-- <div class="text-center mt-3">
                <p>Reciba antes que nadie las noticias y temas relacionados con los productos de REYMA</p>
            </div> --}}
        </div>
        <div class="">
            <form class="w-full needs-validation mt-14" action="{{ route('emails.mailing.store') }}" method="POST">
                @csrf
                <div class="text-center">
                    <input type="text" name="mailmailing" class="py-2 px-3 w-full max-w-sm border border-black"
                        placeholder="Dirección de correo" id="mailmailing" required>
                </div>

                @error('mailmailing')
                    <small class="mt-3 text-lg block w-full text-center text-red-600">{{ $message }}</small>
                @enderror

                @if (session('info'))
                    <div class="mt-3 text-center text-green-600">
                        <strong>{{ session('info') }}</strong>
                    </div>
                @endif
                <div class="text-center my-3">
                    <button id="send_mail" class="px-15 py-3 bg-[#539bfd] text-white text-lg font-bold btn_mailing_news"
                        type="submit">Suscríbirse</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('js')
    {{-- <script type="text/javascript">
            $("#send-msg").click(function(e) {
                e.preventDefault();
            });
        </script> --}}
@stop
