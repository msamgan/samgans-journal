<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Wink\WinkPage;

class Page extends WinkPage
{
    /**
     * @param $slug
     * @return Builder|Model|object|null
     */
    public static function bySlug($slug)
    {
        return Page::query()
            ->where('slug', $slug)
            ->first();
    }

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
