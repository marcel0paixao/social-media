<?php

namespace App\Http\Controllers\Feed;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;
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
    public function store(StoreUpdatePost $request)
    {
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('posts');
    }
    public function show($id)
    {
        if(!$post = Post::find($id)){
            return redirect()->back();
        }

        return view('feed.show', compact('post'));
    }
    public function edit(StoreUpdatePost $request, $id)
    { 
        if(!$post = Post::find($id)){
            return redirect()->back();
        }

        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);

        $post = Post::where('id', $id)->update($input);

        return redirect()->back();
    }
    public function delete($id)
    { 
        if(!$post = Post::find($id)){
            return redirect()->back();
        }
        $post->delete();

        return redirect()->route('posts');
    }
}
