<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    public function __construct()
    {
        //
    }

    public function page(Page $page)
    {
        return view('page')->with(compact('page'));
    }
}
