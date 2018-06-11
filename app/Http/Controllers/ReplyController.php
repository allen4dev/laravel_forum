<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class ReplyController extends Controller
{
    public function store(Thread $thread)
    {
        $thread->addReply(request('body'));

        return redirect($thread->path());
    }
}
