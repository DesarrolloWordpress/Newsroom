@extends('adminlte::page')

@section('title', 'Dashboard - Newsroom')

@section('content_header')
    <h1>Lista de Categoría</h1>
@stop

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-secondary" href="{{ route('admin.categories.create') }}">Agregar categoría</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td width='10px'><a href="{{ route('admin.categories.edit', $category) }}"
                                        class="btn btn-primary btn-sm">Editar</a>
                                </td>
                                <td width='10px'>
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"class="btn btn-danger btn-sm">Eliminar</button>
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
@stop

@section('js')
    <script></script>
@stop
