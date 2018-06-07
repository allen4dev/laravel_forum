<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Skill;
use App\Thread;

class HomeController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $threads = Thread::latestPublished();

        return view('home', compact('skills', 'threads'));
    }
}
