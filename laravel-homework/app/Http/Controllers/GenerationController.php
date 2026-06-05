<?php

namespace App\Http\Controllers;

use App\Models\Generation;
use Illuminate\Http\Request;

class GenerationController extends Controller
{
    public function showWebIndex()
    {
        $generations = Generation::all();
        return view('generations.index', compact('generations'));
    }

    public function showWebDetail($id)
    {
        $generation = Generation::findOrFail($id);
        return view('generations.show', compact('generation'));
    }
}
