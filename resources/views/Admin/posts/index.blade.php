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
    @livewire('admin.posts-index')
@stop
