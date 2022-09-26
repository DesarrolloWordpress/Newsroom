@extends('adminlte::page')

@section('title', 'Dashboard - Newsroom')

@section('content_header')
    <div class="row">
        <h1 class="col-auto">Lista de Categoría</h1>
        <div class="col-auto">
            <a class="btn btn-outline-primary" href="{{ route('admin.categories.create') }}">Agregar categoría</a>
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
                        @foreach ($categories as $category)
                            <tr>
                                <td width='50px'>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td width='10px'><a href="{{ route('admin.categories.edit', $category) }}"
                                        class="btn btn-primary btn-sm">Editar</a>
                                </td>
                                <td width='10px'>
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
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
