<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

use App\Filters\ThreadsFilter;

class SearchController extends Controller
{
    public function index(ThreadsFilter $filter)
    {
        $results = Thread::search($filter)->get();

        return view('search', compact('results'));
    }
}
