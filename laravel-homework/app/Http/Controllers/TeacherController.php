<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function showWebIndex()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function showWebDetail($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }
}
