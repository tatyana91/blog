<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{
    public function index(){
        return view('posts.index', [ 'posts' => Post::all() ]);
    }

    public function show($id){
        return view('posts.show', [ 'post' => Post::findOrFail($id) ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:8|max:128',
            'slug' => 'required|min:8|max:128|unique:posts',
            'content' => 'required|min:8'
        ]);

        $data = $request->only([ 'title', 'content', 'slug' ]);
        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function edit($id){
        return view('posts.edit', [ 'post' => Post::findOrFail($id) ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required|min:8|max:128',
            'slug' => "required|min:8|max:128|unique:posts,slug,$id",
            'content' => 'required|min:8'
        ]);

        $data = $request->only([ 'title', 'content', 'slug' ]);
        $post = Post::findOrFail($id);
        $post->fill($data);
        $post->save();
        return redirect()->route('posts.index');
    }

    public function delete($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
