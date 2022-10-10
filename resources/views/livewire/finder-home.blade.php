<div class="w-full col">

    {!! Form::open(['class' => 'flex col justify-center mt-3', 'method' => 'GET']) !!}

    {!! Form::search('search', null, [
        'class' => 'hidden px-2 rounded bg-transparent w-full',
        'placeholder' => 'Buscar',
    ]) !!}

    @if ($this->search != '')
        <span class="transition-all text-[#052453] border border-1px border-[#052453] hover:border-transparent rounded"
            id="search-addon">
            <i class="p-3.5 flex relative fa-solid fa-xmark hover:text-white hover:bg-[#3b85ec]">
                <div>
                    {!! Form::submit('', [
                        'class' => 'p-3.5 top-0 left-0 right-1 absolute cursor-pointer',
                        'id' => 'search',
                    ]) !!}
                </div>
                <div class="ml-3">
                    {{ $this->search }}
                </div>
            </i>
        </span>
    @endif
    {!! Form::close() !!}

    @include('posts.entrada')
</div>
