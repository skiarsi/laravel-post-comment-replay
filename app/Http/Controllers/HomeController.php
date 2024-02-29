<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::with(['comments.user','comments.replays.user','user'])
                ->limit(20)
                ->get();
        // return response()->json($posts);
        return view('posts',[
            'posts' => $posts
        ]);
    }
}
