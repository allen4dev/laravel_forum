<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class ReplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Thread $thread)
    {
        request()->validate([
            'body' => 'required',
        ]);

        $thread->addReply(request('body'));

        return redirect($thread->path());
    }
}
