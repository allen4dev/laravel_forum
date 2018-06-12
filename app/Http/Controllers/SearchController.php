<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class SearchController extends Controller
{
    public function index()
    {
        $threads = Thread::latest();

        if (request()->filled('title')) {
            $threads = $threads->where('title', 'like', "%{$title}%");
        }

        if (request()->filled('skill')) {
            $threads = $threads->where('skill_id', request()->skill);
        }

        $results = $threads->get();

        return view('search', compact('results'));
    }
}
