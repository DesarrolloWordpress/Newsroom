@section('footer')
    <div class="container p-0">
        <div class="row justify-content-center">
            <div class="col-md-4 col-xs-12 "><img src="{{ asset('images/home/reyma_logo.png') }}" style="max-width: 130px" />
            </div>
            <div class="text-center col-md-4 col-xs-12 ">
                <h5>Siguenos en:</h5>
                @include('layouts.socialshare')
            </div>
            <div class="text-right col-md-4 col-xs-12 ">
                <p>Blvd. Hermanos Aldama No. 4321, <br> Ciudad Industrial. 37490 Léon, Gto.</p>
                <p><a href="tel:4777889900"> Tel: 477 7889 900 </a> <br> <a href="https://reyma.com.mx/" target="_blank">
                        www.reyma.com.mx
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer_copy row">
        <div class="col-md-12 col-xs-12 p-0">
            <footer class="py-5"
                style="background-color:#052453; color:#FFF; font-size: 1em; opacity:0.6; width: inherit;">
                <div class="container text-center">
                    <p class="m-0">&copy; Copyright 2019 PLÁSTICOS ADHERIBLES DEL BAJÍO S.A. de C.V. Actuamos de
                        manera
                        responsable y con enfoque a la ética y los derechos humanos, basados en el código ETI.
                        Consulta nuestra POLÍTICA DE PRIVACIDAD.</p>
                </div>
            </footer>
        </div>
    </div>
    </div>
    @yield('scripts')
    @stack('body')
    </body>

    </html>
@endsection
