@extends('layouts.app')

@section('title', 'Generation Detail')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $generation->name }}</h1>
    <p>Generation ID: {{ $generation->id }}</p>
@endsection
