<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class SearchController extends Controller
{
    public function index()
    {
        $title = request('title');

        $results = Thread::where('title', 'like', "%{$title}%")->get();

        return view('search', compact('results'));
    }
}
