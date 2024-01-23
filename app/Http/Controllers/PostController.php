<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
