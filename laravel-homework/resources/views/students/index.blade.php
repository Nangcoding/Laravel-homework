@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Students</h1>
    <ul>
        @foreach($students as $s)
            <li class="mb-3">
                <a href="/students/{{ $s->id }}" class="font-semibold">{{ $s->first_name }} {{ $s->last_name }}</a>
                <div class="text-sm text-slate-600">Student ID: {{ $s->Student_id }} • Generation: {{ optional($s->generation)->name }}</div>

                @if($s->classes->isNotEmpty())
                    <div class="mt-2 text-sm">
                        <strong>Classes:</strong>
                        <ul>
                            @foreach($s->classes as $c)
                                <li>{{ $c->name }}
                                    @if($c->subjects->isNotEmpty())
                                        — Subjects:
                                        @foreach($c->subjects as $sub)
                                            <span class="text-xs">{{ $sub->name }}</span>@if(!$loop->last),@endif
                                        @endforeach
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
