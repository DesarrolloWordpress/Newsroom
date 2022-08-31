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
                            <td>{{ $post->category->name }}</td>
                            <td>
                                @foreach ($post->tags as $index => $tag)
                                    {{ $tag->name }}
                                    @if ($index != count($post->tags) - 1)
                                        ,
                                    @endif
                                @endforeach
                            </td>
                            <td width="10px"><a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.posts.edit', $post) }}">Editar</a></td>
                            <td width="10px">
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')</form>

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
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
