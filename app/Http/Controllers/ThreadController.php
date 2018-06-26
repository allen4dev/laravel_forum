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

    public function store()
    {
        request()->validate([
            'thread.title' => 'required|min:5',
            'thread.description' => 'required|min:10',
            'thread.body' => 'required',
            'thread.skill_id' => 'required',
        ]);

        $thread = auth()->user()->publishThread(request()->thread);

        return redirect($thread->path());
    }

    public function update(Thread $thread)
    {
        $this->authorize('update', $thread);

        $thread->update(request()->validate([
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
        ]));

        return redirect($thread->path());
    }

    public function destroy(Thread $thread)
    {
        $thread->delete();

        return redirect('/users/' . auth()->id());
    }
}
