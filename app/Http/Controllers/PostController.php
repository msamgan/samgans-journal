<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Wink\WinkAuthor;

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
        $authorSamgan = WinkAuthor::first();
        return view('blog')->with([
            'posts' => Post::publishedPosts(),
            'authorSamgan' => $authorSamgan
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
