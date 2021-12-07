<?php

namespace App\Http\Controllers\Feed;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    Post,
    User
};

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        foreach ($posts as $post) {
            $post->user_name = User::find($post->user_id)->name;
        }

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
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('posts');
    }
    public function show($id)
    {
        if(!$post = Post::find($id)){
            return redirect()->back();
        }

        $post->user_name = User::find($post->user_id)->name;

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
