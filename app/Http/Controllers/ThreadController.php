<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class ThreadController extends Controller
{
    public function show(Thread $thread)
    {
        return view('threads.detail', compact('thread'));
    }
}
