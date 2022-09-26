<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" placeholder="Buscar nombre de post" class="form-control">
    </div>
    <div class="card-body">
        <table class="table table-stripe">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Categoría</th>
                    <th>Etiquetas</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>
                                @if ($post->category)
                                    {{ $post->category->name }}
                                @endif
                            </td>
                            <td>
                                @if ($post->tags)
                                    @foreach ($post->tags as $index => $tag)
                                        {{ $tag->name }}
                                        @if ($index != count($post->tags) - 1)
                                            ,
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }}">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-danger btn-sm relative">
                                        Eliminar
                                        <button class="absolute w-100 h-100 top-0 left-0" type="submit">
                                        </button>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>
                            <strong>No se encontraron registros</strong>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{ $posts->links() }}
    </div>
</div>
