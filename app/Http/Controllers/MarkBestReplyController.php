<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class MarkBestReplyController extends Controller
{
    public function store(Thread $thread)
    {
        $thread->best_reply = request()->reply_id;
        $thread->save();

        return redirect("/threads/{$thread->id}");
    }
}
