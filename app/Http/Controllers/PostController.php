<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index () {
        return view('posts.index',[
            'posts' => Post::take(5)->get()
        ]);
    }
}
