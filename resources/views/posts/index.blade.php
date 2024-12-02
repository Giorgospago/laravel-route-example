@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h1 class="flex-grow-1">Posts</h1>
                <div>
                    <a href="/posts/create" class="btn btn-primary">Create new post</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        @foreach ($posts as $post)
            <div class="col-4">
                <div class="card">
                    <img src="{{ $post->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->intro }}</p>
                        <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read now</a>
                        <a href="/posts/{{ $post->id }}/delete" class="btn btn-danger">X</a>
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@stop