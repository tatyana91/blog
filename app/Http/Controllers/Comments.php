<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;

class Comments extends Controller
{
    public function store(Request $request, $postId){
        $request->validate([
            'comment' => 'required|min:8'
        ]);

        $data = $request->only([ 'comment' ]);
        $data['post_id'] = $postId;
        Comment::create($data);
        return redirect()->route('posts.show', $postId);
    }
}
