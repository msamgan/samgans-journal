<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * @param Tag $tag
     */
    public function posts(Tag $tag)
    {
        return view('blog')->with([
            'posts' => $tag->posts
        ]);
    }
}
