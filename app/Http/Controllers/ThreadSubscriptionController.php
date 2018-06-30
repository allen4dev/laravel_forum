<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class ThreadSubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Thread $thread)
    {
        $thread->subscribe();
    }

    public function destroy(Thread $thread)
    {
        $thread->unsubscribe();

        return redirect($thread->path());
    }
}
