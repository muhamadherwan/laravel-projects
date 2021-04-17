<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'likes')->paginate(3);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    // single post pages
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
    
    public function store(Request $request)
    {
        //dd('ok');
        //validate
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();

        // store
        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body,



        // redirect
    }

    // delete user post
    public function destroy(Post $post)
    {
        //dd($post);

        $this->authorize('delete', $post);   
        $post->delete();
        return back();

    }
}
