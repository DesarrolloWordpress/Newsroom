<div class="w-full">
    <h5 class="text-center text-3xl font-bold">NOTAS RELACIONADAS</h5>
</div>
<div class="mb-20 mt-5 grid grid-cols-3 gap-5 max-w-screen-xl">
    @foreach ($relacionados as $relacionado)
        <div>
            <x-postcard postid='{{ $relacionado->id }}'></x-postcard>
        </div>
    @endforeach
</div>
