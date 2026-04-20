<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $levels = Level::orderby('sequence_number')->get();
        return view('home.index', compact('levels'));
    }

    public function about()
    {
        return view('home.about');
    }

    public function resources()
    {
        return view('home.resources');
    }

    public function tutorials()
    {
        return view('home.tutorials');
    }
}
