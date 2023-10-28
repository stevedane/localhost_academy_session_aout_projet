<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $title = $request->input('title');
            $description = $request->input('description');

            //check if title already exists
            $exist_post = Post::where('title', $title)->first();

            if ($exist_post) {
                throw new Exception('title already exists');
            }

            $post = new Post();
            $post->title = $title;
            $post->description = $description;
            $post->save();

            return redirect(route('posts.index'));
        } catch (\Exception $e) {
            return redirect(route('posts.create'))->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {


        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $post->title = $title;
        $post->description = $description;
        $post->save();
        return redirect()->route('posts.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function comment(Post $post)
    {

        return view('posts.comment', ['post' => $post]);
    }
}
