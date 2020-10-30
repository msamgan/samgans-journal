<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

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

    /**
     * @param Tag $tag
     * @return Application|RedirectResponse|Redirector
     */
    public function categoryToTag(Tag $tag)
    {
        return redirect('/tag/' . $tag->slug);
    }

    /**
     * @param Tag $tagPrimary
     * @param Tag $tag
     * @return Application|RedirectResponse|Redirector
     */
    public function categoryToSubTag(Tag $tagPrimary, Tag $tag)
    {
        return redirect('/tag/' . $tag->slug);
    }
}
