<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Wink\WinkPost;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

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

    /**
     * @return FeedItem
     */
    public function toFeedItem() : FeedItem
    {
        return FeedItem::create([
            'id' => $this->id,
            'title' => $this->title,
            'summary' => $this->excerpt,
            'updated' => $this->updated_at,
            'link' => $this->slug,
            'author' => $this->author->name,
        ]);
    }

    /**
     * @return mixed
     */
    public static function getFeedItems()
    {
        return Post::all();
    }
}
