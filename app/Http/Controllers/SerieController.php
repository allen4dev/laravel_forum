<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Serie;

class SerieController extends Controller
{
    public function show(Serie $serie)
    {
        return view('series.detail', compact('serie'));
    }
}
