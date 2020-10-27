<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Wink\WinkPage;

class Page extends WinkPage
{
    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
