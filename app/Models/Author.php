<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Wink\WinkAuthor;

class Author extends WinkAuthor
{
    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
