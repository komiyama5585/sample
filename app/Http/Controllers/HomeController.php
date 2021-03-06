<?php

namespace App\Http\Controllers;

use App\Post;
use App\Cart;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $posts = Post::all();
        

        return view('index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('index', compact('post'));

    }
}
