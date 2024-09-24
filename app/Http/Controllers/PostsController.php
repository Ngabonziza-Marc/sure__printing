<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostsController extends Controller
{
    public function showPosts()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }


    public function storepost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $post = new Post();
        $post->name = $validatedData['name'];
        $post->message = $validatedData['message'];

        $post->save();

        return redirect()->route('index')->with('success', 'Post created successfully!');
    }
}

