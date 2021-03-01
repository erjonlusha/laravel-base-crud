<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show index page
     * @return view
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show posts page
     * @return view
     */
    public function posts(Post $post)
    {
        $posts = $post->all();
        // dd($posts); 
        return view('posts', compact('posts'));
    }

    /**
     * Show contact page
     * @return view
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show about page
     * @return view
     */
    public function about()
    {
        return view('about');
    }
}
