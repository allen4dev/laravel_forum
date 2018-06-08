<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Skill;

class SkillController extends Controller
{
    public function show(Skill $skill)
    {
        return view('skills.detail', compact('skill'));
    }
}
