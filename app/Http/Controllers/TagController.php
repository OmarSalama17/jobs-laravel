<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    function index()
    {
        $data = Tag::all();
        return view("/tag.index", ["data" => $data]);
    }

    function create()
    {
        Tag::create([
            'title' => "js",
        ]);

        return redirect('/tag');
    }
    function delete($id)
    {
        Post::destroy($id);
    }

    public function testManyToMany()
    {
        // $post2 = Post::find(1);
        // $post3 = Post::find(2);
        // $post2->tags()->attach([1, 2]);
        // $post3->tags()->attach([1]);
        // return response()->json([
        //     'post2' => $post2->tags,
        //     'post3' => $post3->tags
        // ]);

        $tag = Tag::find(2);
        return response()->json([
            'tag' => $tag->title,
            'post' => $tag->posts
        ]);
    }
}
