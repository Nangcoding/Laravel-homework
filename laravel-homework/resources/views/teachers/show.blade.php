@extends('layouts.app')

@section('title', 'Teacher Detail')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $teacher->Frist_name }} {{ $teacher->Last_name }}</h1>
    <p><strong>Email:</strong> {{ $teacher->email }}</p>
    <p><strong>Phone:</strong> {{ $teacher->Phone }}</p>
@endsection
