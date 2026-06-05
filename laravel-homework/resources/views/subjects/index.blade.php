@extends('layouts.app')

@section('title', 'Subjects')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Subjects</h1>
    <ul>
        @foreach($subjects as $s)
            <li><a href="/subjects/{{ $s->id }}">{{ $s->name }}</a></li>
        @endforeach
    </ul>
@endsection
