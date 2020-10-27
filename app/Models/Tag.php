<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Wink\WinkTag;

class Tag extends WinkTag
{
    /**
     * @return Builder[]|Collection
     */
    public static function uniqueTags()
    {
        return Tag::query()->latest()->get()->unique('name');
    }

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
