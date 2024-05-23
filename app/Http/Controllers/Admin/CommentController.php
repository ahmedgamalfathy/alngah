<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $article=Article::first();
       $articleComments = $article->comments;
       return view('admin.comments.index',['articleComments'=>$articleComments ,'article' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }

    public function accept($comment)
    {
            $comment=Comment::findOrFail($comment);
            $comment->is_Publish=1;
            $comment->save();
            return redirect()->back();
    }
    public function reject($comment)
    {
            $comment=Comment::findOrFail($comment);
            $comment->is_Publish=0;
            $comment->save();
            return redirect()->back();
    }
}
