<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GenerationController;
use App\Models\Generation;
use App\Models\Student;
use App\Models\Teacher;

// Mapping our web entry views up to our data-linked controller processing points
Route::get('/students', [StudentController::class, 'showWebIndex']);
Route::get('/students/{id}', [StudentController::class, 'showWebDetail']);  

// Teachers Web UI Pathways
Route::get('/teachers', [TeacherController::class, 'showWebIndex']);
Route::get('/teachers/{id}', [TeacherController::class, 'showWebDetail']);

// Subjects Web UI Pathways
Route::get('/subjects', [SubjectController::class, 'showWebIndex']);
Route::get('/subjects/{id}', [SubjectController::class, 'showWebDetail']);

// Generations Web UI Pathways
Route::get('/generations', [GenerationController::class, 'showWebIndex']);
Route::get('/generations/{id}', [GenerationController::class, 'showWebDetail']);

Route::get('/', function () {
    // Eager-load relations for the dashboard to avoid N+1 and provide structured data
    $generations = Generation::with('students')->get();
    $students = Student::with(['generation', 'classes.subjects'])->get();
    $teachers = Teacher::with('subjects')->get();

    return view('welcome', compact('generations', 'students', 'teachers'));
});
