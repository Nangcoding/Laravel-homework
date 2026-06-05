<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function showWebIndex()
    {
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    public function showWebDetail($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.show', compact('subject'));
    }
}
