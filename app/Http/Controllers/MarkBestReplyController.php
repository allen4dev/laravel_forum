<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reply;

class MarkBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        $thread = $reply->thread;

        $thread->markBestReply($reply);

        return redirect($thread->path());
    }
}
