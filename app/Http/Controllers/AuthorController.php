<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class AuthorController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * @param Author $author
     * @return Application|Factory|View
     */
    public function authorPage(Author $author)
    {
        return view('author')->with(compact('author'));
    }
}
