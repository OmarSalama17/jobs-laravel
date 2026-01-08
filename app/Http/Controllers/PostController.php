<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index()
    {
        $data = Post::all();
        return view("/post.index", ["data" => $data]);
    }

    function show($id)
    {
        $post = Post::findOrFail($id);
        return view("/post.show", ['data' => $post]);
    }

    function create()
    {
        Post::create([
            'title' => "front2",
            'body' => 'frontEnd2',
            'author' => 'omar2',
            'published' => true
        ]);

        return redirect('/post');
    }
    function delete($id)
    {
        Post::destroy($id);
    }
}
