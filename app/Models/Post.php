<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Wink\WinkPost;

class Post extends WinkPost
{
    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return mixed
     */
    public static function publishedPosts()
    {
        return Post::query()
            ->published()
            ->orderBy('publish_date', 'DESC')
            ->paginate(PAGINATION);
    }
}
