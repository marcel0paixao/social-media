<?php

namespace App\Http\Controllers\Feed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('feed.index', compact('posts'));
    }
    public function create()
    {
        return view('feed.create');
    }
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('posts');
    }
}
