@extends('layouts.app')

@section('title', 'Generations')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Generations</h1>
    <ul>
        @foreach($generations as $g)
            <li><a href="/generations/{{ $g->id }}">{{ $g->name }}</a></li>
        @endforeach
    </ul>
@endsection
