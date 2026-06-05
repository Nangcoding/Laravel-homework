@extends('layouts.app')

@section('title', 'Teachers')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Teachers</h1>
    <ul>
        @foreach($teachers as $t)
            <li><a href="/teachers/{{ $t->id }}">{{ $t->Frist_name }} {{ $t->Last_name }}</a></li>
        @endforeach
    </ul>
@endsection
