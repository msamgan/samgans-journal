<?php

namespace App\Http\Controllers;

use App\Services\PenItOff;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $penItOff;

    public function __construct(PenItOff $penItOff)
    {
        $this->penItOff = $penItOff;
    }

    public function index()
    {
        $projects = $this->penItOff->projects();

        return view('projects')->with(compact('projects'));
    }
}
