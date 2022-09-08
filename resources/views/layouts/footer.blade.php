@section('footer')
    <footer class="bg-[#f4f4f4]">
        <div class="py-5 max-w-screen-2xl mx-auto grid grid-cols-3 gap-5">
            <div class="">
                <img src="{{ asset('images/home/reyma_logo.png') }}" style="max-width: 160px" />
            </div>
            <div class="">
                <div class="text-center">
                    <h5>Siguenos en:</h5>
                    @include('layouts.socialshare')
                </div>
            </div>
            <div class="">
                <p class="text-xl-end text-center">Blvd. Hermanos Aldama No. 4321, <br> Ciudad Industrial. 37490 Léon,
                    Gto.</p>
                <hr>
                <p class="text-xl-end text-center bold_txt_foo">
                    <a href="tel:4777889900"> Tel: 477 7889 900 </a>
                    <br>
                    <a href="https://reyma.com.mx/" target="_blank"> www.reyma.com.mx </a>
                </p>
            </div>
        </div>
        <div class="footer_copy">
            <div class="col-md-12 col-xs-12">
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
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('scripts')
    @stack('body')
    </body>

    </html>
@endsection
