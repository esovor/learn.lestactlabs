<?php

namespace App\Http\Controllers;

use App\Models\ClassLevel;
use App\Models\Level;
use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function index()
    {
        $levels = Level::orderby('sequence_number')->get();
        return view('learn.index', compact('levels'));
    }

    public function showClasses(Level $level)
    {
        $classes = $level->classLevels()->orderBy('sequence_number')->get();
        return view('learn.showClass', compact('classes', 'level'));
    }


    public function showSubjects(Level $level, ClassLevel $class)
    {
        $subjects = $class->subjects()->orderBy('sequence_number')->get();
        return view('learn.showSubject', compact('subjects', 'level', 'class'));
    }
}
