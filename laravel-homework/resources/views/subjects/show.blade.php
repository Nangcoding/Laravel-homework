@extends('layouts.app')

@section('title', 'Subject Detail')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $subject->name }}</h1>
    <p>{{ $subject->Description }}</p>
@endsection
