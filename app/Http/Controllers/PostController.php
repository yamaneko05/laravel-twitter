<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\String_;

class PostController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'text' => 'required'
        ]);
        $post = new Post();
        $post->user_id = Auth::id();
        $post->text = $request->text;
        $post->save();
        return redirect('/home');
    }

    public function reply(Request $request, String $parentPostId) {
        $request->validate([
            'text' => 'required',
            'parent_post_id' => 'exist:posts,id'
        ]);
        $post = new Post();
        $post->user_id = Auth::id();
        $post->text = $request->text;
        $post->parent_post_id = $parentPostId;
        $post->save();
        return redirect("/posts/{$parentPostId}");
    }
}
