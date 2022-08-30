<div class="emailing">
    <div class="container-md py-5">
        <div class="">
            <div class="text-center">
                <h2>SUSCRÍBETE A NUESTRO MAILING</h2>
            </div>
            {{-- <div class="text-center mt-3">
                <p>Reciba antes que nadie las noticias y temas relacionados con los productos de REYMA</p>
            </div> --}}
        </div>
        <div class="">
            <form class="frm_news row g-3 needs-validation justify-content-center mt-2"
                action="{{ route('emails.mailing.store') }}" method="POST">
                @csrf
                <div class="col-md-4">
                    <input type="text" name="mailmailing" class="form-control" placeholder="Dirección de correo"
                        id="mailmailing" required>
                    <div class="valid-feedback">
                        good!
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button id="send-msg" class="btn btn-primary btn_mailing_news" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('js')
    <script type="text/javascript">
        $("#send-msg").click(function(e) {
            e.preventDefault();
        });
    </script>
@stop
