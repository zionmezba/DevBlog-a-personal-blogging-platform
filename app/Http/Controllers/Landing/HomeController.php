<?php

namespace App\Http\Controllers\Landing;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

// php artisan make:controller HomeController
class HomeController extends Controller
{
    public function home()
    {
        $post = Post::first();
        $user = User::first();

        return view('pages.landing.landing', compact('post', 'user'));
    }

    public function blogs()
    {
        $posts = Post::all();
        return view('pages.landing.blogs', compact('posts'));
    }

    // CRUD - Create, Read (done), Update, Delete
    public function createBlog(Request $request)
    {
        $title = $request->blog_title;
        $content = $request->blog_content;

        Post::create([
            'title' => $title,
            'content' => $content
        ]);

        return redirect('/blogs');
    }

    
}
