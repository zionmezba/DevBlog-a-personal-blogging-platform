<?php

namespace App\Http\Controllers;

use App\Models\Post;

// php artisan make:controller HomeController
class HomeController extends Controller
{
    public function home()
    {
        $post = Post::first();
        if ($post->user_id != 1) {
            $post = null;
        }
        return view('landing.landing', compact('post'));
    }
}
