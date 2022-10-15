<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all()->pluck('title', 'id');
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:8|max:128',
            'slug' => 'required|min:8|max:128|unique:posts',
            'content' => 'required|min:8',
            'category_id' => 'required|exists:categories,id'
        ]);

        $data = $request->only([ 'title', 'content', 'slug', 'category_id' ]);
        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $categories = Category::all()->pluck('title', 'id');
        return view('posts.edit', compact('categories', 'post'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required|min:8|max:128',
            'slug' => "required|min:8|max:128|unique:posts,slug,$id",
            'content' => 'required|min:8',
            'category_id' => 'required|exists:categories,id'
        ]);

        $data = $request->only([ 'title', 'content', 'slug', 'category_id' ]);
        $post = Post::findOrFail($id);
        $post->fill($data);
        $post->save();
        return redirect()->route('posts.index');
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function trash(){
        return view('posts.trash', [ 'posts' => Post::onlyTrashed()->get() ]);
    }

    public function restore($id){
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->route('posts.trash');
    }
}
