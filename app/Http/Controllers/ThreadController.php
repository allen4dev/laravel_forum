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

    public function store(Request $request)
    {
        $thread = Thread::create([
            'user_id'     => $request->user_id,
            'skill_id'    => $request->skill_id,
            'serie_id'    => $request->serie_id,
            'title'       => $request->title,
            'description' => $request->description,
            'body'        => $request->body,
        ]);

        return redirect($thread->path());
    }
}
