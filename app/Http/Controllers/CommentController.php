<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Comment::all();
        return view("/comment.index", ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        // Comment::create([
        //     'content' => "dd ss dd",
        //     'author' => 'omar',
        //     'post_id' => 1
        // ]);

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // print_r($request->all());
        $comment = new Comment();
        $comment->post_id =  $request->input("post_id");
        $comment->author =  "user";
        $comment->content =  $request->input("comment");
        $comment->save();

        return redirect("/post/$request->post_id");
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
        $comment= Comment::find($id);
        $comment->delete();
        return redirect("/post");
    }
}
