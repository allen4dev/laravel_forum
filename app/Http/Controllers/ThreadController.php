<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class ThreadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function show(Thread $thread)
    {
        return view('threads.detail', compact('thread'));
    }

    public function store(Request $request)
    {
        $thread = auth()->user()->publishThread($request->thread);

        return redirect($thread->path());
    }
}
