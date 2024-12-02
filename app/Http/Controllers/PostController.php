<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // SELECT * FROM posts

        $data = [
            "posts" => $posts
        ];

        return view('posts.index', $data);
    }

    public function show($id)
    {
        $post = Post::find($id);
        // SELECT * FROM posts WHERE id = 1

        $data = [
            "post" => $post
        ];

        return view('posts.show', $data);
    }

    public function createForm() {
        return view('posts.create');
    }

    public function store(Request $request) {
        Post::create([
            "title" => $request->title,
            "intro" => $request->intro,
            "description" => $request->description,
            "image" => $request->image,
            "author" => $request->author
        ]);

        return redirect("/posts");
    }

    public function editForm($id) {
        $post = Post::find($id);

        $data = [
            "post" => $post
        ];

        return view('posts.edit', $data);
    }

    public function update($id, Request $request) {
        $post = Post::find($id);

        $post->title = $request->title;
        $post->intro = $request->intro;
        $post->description = $request->description;
        $post->image = $request->image;
        $post->author = $request->author;

        $post->save();

        return redirect('/posts');
    }


    public function delete($id) {
        // $post = Post::find($id);
        // SELECT * FROM posts WHERE id = 1
        // $post->delete();
        // DELETE FROM posts WHERE id = 1

        Post::destroy($id);
        // DELETE FROM posts WHERE id = 1

        return redirect("/posts");
    }
}
