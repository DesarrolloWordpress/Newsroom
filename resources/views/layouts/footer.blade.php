@section('footer')
    <footer style="background-color:#f4f4f4;">
        <div class="container-md p-0">
            <div class="row_f1 row justify-content-center py-5">
                <div
                    class="d-flex align-items-center justify-content-xl-start justify-content-center col-xl-4 col-sm-12 mt-xl-0 mt-md-4">
                    <img src="{{ asset('images/home/reyma_logo.png') }}" style="max-width: 130px" />
                </div>
                <div class="row_f2 d-flex justify-content-center align-items-center col-xl-4 col-sm-12 mt-xl-0 mt-md-4">
                    <div class="text-center">
                        <h5>Siguenos en:</h5>
                        @include('layouts.socialshare')
                    </div>
                </div>
                <div class="row_f3 text-right col-xl-4 col-sm-12 mt-xl-0 mt-md-4">
                    <p class="text-xl-end text-center">Blvd. Hermanos Aldama No. 4321, <br> Ciudad Industrial. 37490 Léon,
                        Gto.</p>
                    <p class="text-xl-end text-center bold_txt_foo">
                        <a href="tel:4777889900"> Tel: 477 7889 900 </a>
                        <br>
                        <a href="https://reyma.com.mx/" target="_blank"> www.reyma.com.mx </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer_copy row">
            <div class="col-md-12 col-xs-12 p-0">
                <div class="py-4" style="background-color:#052453; color:#FFF; font-size: 1em; width: inherit;">
                    <div class="col-md-6 px-5 container text-center">
                        <p class="m-0">&copy; Copyright 2019 PLÁSTICOS ADHERIBLES DEL BAJÍO S.A. de C.V. Actuamos de
                            manera
                            responsable y con enfoque a la ética y los derechos humanos, basados en el código ETI.
                            Consulta nuestra POLÍTICA DE PRIVACIDAD.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    @yield('scripts')
    @stack('body')
    </body>

    </html>
@endsection
