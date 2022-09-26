@extends('adminlte::page')

@section('title', 'Dashboard - Newsroom')

@section('content_header')
    <div class="row">
        <h1 class="col-auto">Lista de etiquetas</h1>
        <div class="col-auto">
            <a class="btn btn-outline-primary" href="{{ route('admin.tags.create') }}">Agregar etiqueta</a>
        </div>
    </div>
@stop

@section('content')
    <div class="content">

        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <td width='50px'>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td width='10px'><a href="{{ route('admin.tags.edit', $tag) }}"
                                        class="btn btn-primary btn-sm">Editar</a>
                                </td>
                                <td width='10px'>
                                    <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script src="https://cdn.tailwindcss.com/3.1.8"></script>
@stop
