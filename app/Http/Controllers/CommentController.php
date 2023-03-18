<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'post_id' => 'required',
        ]);
        $comment = new Comment();
        $comment->message = $request->message;
        $comment->post_id = $request->post_id;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        return response()->json($comment);
    }
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'message' => 'required',
        ]);
        $comment->message = $request->message;
        $comment->save();
        return response()->json($comment);
    }
    public function delete(Comment $comment)
    {
        $comment->delete();
        return response()->json($comment);
    }
}
