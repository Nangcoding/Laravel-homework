@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <section class="mb-8">
        <h2 class="text-xl font-semibold">Generations</h2>
        <ul>
            @foreach($generations as $g)
                <li>
                    <strong>{{ $g->name }}</strong>
                    <span class="text-sm text-slate-600">— {{ $g->students->count() }} students</span>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="mb-8">
        <h2 class="text-xl font-semibold">Students</h2>
        <ul>
            @foreach($students as $s)
                <li class="mb-3">
                    <div class="font-semibold">{{ $s->first_name }} {{ $s->last_name }} <span class="text-sm">({{ $s->Student_id }})</span></div>
                    <div class="text-sm text-slate-600">Generation: {{ optional($s->generation)->name }}</div>

                    @if($s->classes->isNotEmpty())
                        <div class="mt-2 text-sm">
                            <strong>Classes & Subjects:</strong>
                            <ul>
                                @foreach($s->classes as $c)
                                    <li class="mt-1">
                                        <div>{{ $c->name }} <span class="text-xs text-slate-500">— {{ $c->Description }}</span></div>
                                        @if($c->subjects->isNotEmpty())
                                            <div class="text-xs mt-1">Subjects:
                                                @foreach($c->subjects as $sub)
                                                    @php $teacher = $teachers->firstWhere('id', $sub->pivot->teacher_id ?? null); @endphp
                                                    <span class="inline-block mr-2">{{ $sub->name }}@if($teacher) — <em>{{ ($teacher->Frist_name ?? $teacher->first_name) . ' ' . ($teacher->Last_name ?? $teacher->last_name) }}</em>@endif</span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </section>

    <section class="mb-8">
        <h2 class="text-xl font-semibold">Teachers</h2>
        <ul>
            @foreach($teachers as $t)
                <li class="mb-2">
                    <div class="font-semibold">{{ ($t->Frist_name ?? $t->first_name) . ' ' . ($t->Last_name ?? $t->last_name) }}</div>
                    @if($t->subjects && $t->subjects->isNotEmpty())
                        <div class="text-sm text-slate-600">Subjects: {{ $t->subjects->pluck('name')->join(', ') }}</div>
                    @endif
                </li>
            @endforeach
        </ul>
    </section>

@endsection
