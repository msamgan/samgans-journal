<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class PostController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * @return Application|Factory|View
     */
    public function listing()
    {
        return view('blog')->with([
            'posts' => Post::publishedPosts()
        ]);
    }

    /**
     * @param Post $post
     * @return Application|Factory|View
     */
    public function post(Post $post)
    {
        return view('post')->with(compact('post'));
    }
}
