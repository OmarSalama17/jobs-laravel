<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index()
    {
        $data = Comment::all();
        return view("/comment.index", ["data" => $data]);
    }


    function create()
    {
        Comment::create([
            'content' => "dd ss dd",
            'author' => 'omar',
            'post_id' => 1
        ]);

        return redirect('/comments');
    }
}
