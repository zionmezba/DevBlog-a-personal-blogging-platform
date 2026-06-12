<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

// php artisan make:controller HomeController
class HomeController extends Controller
{
    public function home()
    {
        $post = Post::first();
        $user = User::first();
        if ($post->user_id != 1) {
            $post = null;
        }
        return view('pages.landing.landing', compact('post', 'user'));
    }
}
