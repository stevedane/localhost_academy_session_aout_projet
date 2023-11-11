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
        $comments = Comment::all()->paginate(10);
        return view("comments.index", compact("comments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comments.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'id_user'=> 'required',
            'description'=> 'required',
            'rate'=>'required'
        ]);
        $comment = new Comment();
        $comment->id_user = $request->input('id_user');
        $comment->description = $request->input('description');
        $comment->rate = $request->input('rate');

        $comment->save();
        return redirect()->route('comments');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([

            'id_user'=> 'required',
            'description'=> 'required',
            'rate'=>'required'
        ]);

        $comment->id_user = $request->input('id_user') ?? $comment->id_user;
        $comment->description = $request->input('description') ?? $comment->description;
        $comment->rate = $request->input('rate') ?? $comment->rate;

        $comment->save();
        return redirect()->route('comments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back();
    }
}
