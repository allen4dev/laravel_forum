<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class ThreadSubscriptionController extends Controller
{
    public function store(Thread $thread)
    {
        $thread->subscribe();
    }
}