@section('banner-fondo-inicio')
    <div class="px-3"
        style="background-image: URL('{{ asset('images/home/instalaciones_banderas.jpg') }}'); background-size: cover; background-repeat: no-repeat;">
        <div class="py-[73px] w-100">
            <div class="my-[130px] text-[#FFF] mx-auto container flex flex-col">
                <div class="flex justify-center">
                    <div class="flex justify-end">
                        <img class="max-w-[230px] object-contain" src="{{ asset('images/home/reyma_logo.png') }}" />
                    </div>
                    <div class="mx-4 border-l-[1px] border-l-[#FFF]"></div>
                    <h2 class="my-4 text-8xl font-bold flex items-center"> Newsroom </h2>
                </div>
                <div class="my-16">
                    <h5 class="mb-4 text-4xl font-bold text-center">Bienvenido</h5>
                    <p class="text-2xl text-center md:max-w-2lg">
                        Recibe antes que nadie las noticias relaciondas con los produtos <span
                            class="font-bold">REYMA</span>.
                    </p>
                </div>
                <div class="pt-5">
                    <div class="px-2 pb-2 mx-auto flex justify-center border-b-2 border-b-[#8793ad] max-w-lg">
                        <input wire:model="search" type="search" class="px-2 rounded bg-transparent w-full"
                            placeholder="Buscar" aria-label="Search" aria-describedby="search-addon" />
                        <span class="" id="search-addon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<div class="w-full col text-center">
    @include('posts.entrada')
</div>
