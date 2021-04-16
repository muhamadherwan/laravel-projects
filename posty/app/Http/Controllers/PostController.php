<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
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
}