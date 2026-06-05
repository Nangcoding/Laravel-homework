@extends('layouts.app')

@section('title', 'Student Detail')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $student->first_name }} {{ $student->last_name }}</h1>
    <p><strong>Student ID:</strong> {{ $student->Student_id }}</p>
    <p><strong>Generation:</strong> {{ optional($student->generation)->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>

    @if($student->classes->isNotEmpty())
        <h3 class="mt-4 font-semibold">Classes</h3>
        <ul>
            @foreach($student->classes as $class)
                <li>
                    <strong>{{ $class->name }}</strong> — {{ $class->Description }}
                    @if($class->subjects->isNotEmpty())
                        <div class="text-sm">Subjects:
                            @foreach($class->subjects as $sub)
                                <span class="text-xs">{{ $sub->name }}</span>@if(!$loop->last),@endif
                            @endforeach
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
@endsection
