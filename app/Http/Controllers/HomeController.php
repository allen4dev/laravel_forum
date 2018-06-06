<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $skills = Skill::all();

        return view('home', compact('skills'));
    }
}
