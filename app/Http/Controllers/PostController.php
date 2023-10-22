<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //Route Blog
    public function blog()
    {
        return view('blog', [
            'title' => 'Blog',
            'post' => Post::all()
        ]);
    }

    public function post($slug)
    {
        return view('blogs', [
            'title' => 'Blog',
            'post' => Post::find($slug)
        ]);
    }

    public function home()
    {
        return view('home', [
            'title' => 'Home',
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'aboutData' => Post::about()
        ]);
    }
}
