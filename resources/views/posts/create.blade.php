@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1>Create new post</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form method="POST" action="/posts/create">
                
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Post title here...">
                </div>
                <div class="mb-3">
                    <label for="intro" class="form-label">Small description</label>
                    <textarea name="intro" class="form-control" id="intro" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Large description</label>
                    <textarea name="description" class="form-control" id="description" rows="6"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input name="image" type="url" class="form-control" id="image" placeholder="https://...">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input name="author" type="text" class="form-control" id="author" placeholder="Author name here...">
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-success">Save post</button>
                </div>
            </form>
        </div>
    </div>

</div>
@stop