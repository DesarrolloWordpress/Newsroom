@extends('adminlte::page')

@section('title', 'Dashboard - Newsroom')

@section('content_header')
    <div class="row">
        <h1 class="col-auto">Posts</h1>
        <div class="col-auto">
            <a class="btn btn-outline-primary" href="{{ route('admin.posts.create') }}">Agregar post</a>
        </div>
    </div>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    <script src="https://cdn.tailwindcss.com/3.1.8"></script>
@stop
