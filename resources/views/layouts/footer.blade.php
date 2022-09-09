@section('footer')
    <footer class="bg-[#f4f4f4]">
        <div class="py-10 max-w-screen-2xl mx-auto grid grid-cols-3 gap-5">
            <div class="flex flex-col justify-center">
                <img src="{{ asset('images/home/reyma_logo.png') }}" style="max-width: 160px" />
            </div>
            <div class="flex flex-col justify-center">
                <div class="text-center">
                    <h5 class="mb-3 text-sm">Siguenos en:</h5>
                    @include('layouts.socialshare')
                </div>
            </div>
            <div class="flex flex-col justify-center">
                <p class="text-sm text-end">Blvd. Hermanos Aldama No. 4321, <br> Ciudad Industrial. 37490 Léon,
                    Gto.</p>
                <div class="flex justify-end">
                    <hr class="my-3 w-full max-w-[150px] border border-[#858b97]">
                </div>
                <p class="text-sm text-end font-bold">
                    <a href="tel:4777889900"> Tel: 477 7889 900 </a>
                    <br>
                    <a href="https://reyma.com.mx/" target="_blank"> www.reyma.com.mx </a>
                </p>
            </div>
        </div>
        <div class="w-full bg-[#052453] text-white">
            <div class="py-10 max-w-screen-lg mx-auto text-center text-sm">
                <p>&copy; Copyright 2019 PLÁSTICOS ADHERIBLES DEL BAJÍO S.A. de C.V. Actuamos de
                    manera
                    responsable y con enfoque a la ética y los derechos humanos, basados en el código ETI.
                    Consulta nuestra POLÍTICA DE PRIVACIDAD.</p>
            </div>
        </div>
    </footer>
    {{-- Bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script> --}}
    {{-- Alpine --}}
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    @yield('scripts')
    @stack('body')
    </body>

    </html>
@endsection
