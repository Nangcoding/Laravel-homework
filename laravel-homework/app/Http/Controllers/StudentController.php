<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showWebIndex()
    {
        // Eager load generation and classes (and subjects via classes)
        $students = Student::with(['generation', 'classes.subjects'])->get();
        return view('students.index', compact('students'));
    }

    public function showWebDetail($id)
    {
        $student = Student::with(['generation', 'classes.subjects'])->findOrFail($id);
        return view('students.show', compact('student'));
    }
}
