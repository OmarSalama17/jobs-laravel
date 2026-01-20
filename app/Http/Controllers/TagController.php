<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Tag::all();
        return view("/tag.index", ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        Tag::create([
            'title' => "css",
        ]);

        return redirect('/tag');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Post::destroy($id);
    }

    public function testManyToMany()
    {
        $post2 = Post::find(1);
        $post3 = Post::find(2);
        $post2->tags()->attach([1, 2]);
        $post3->tags()->attach([1]);
        return response()->json([
            'post2' => $post2->tags,
            'post3' => $post3->tags
        ]);

        // $tag = Tag::find(2);
        // return response()->json([
        //     'tag' => $tag->title,
        //     'post' => $tag->posts
        // ]);
    }
}
