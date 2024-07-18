@extends('layouts.app')

@section('content')

<h1>Open Issues Assigned to Me</h1>

<ul>
    @foreach ($issues as $issue)
        <li>
            <a href="{{ route('issues.show', $issue['number']) }}">
                #{{ $issue['number'] }} - {{ $issue['title'] }}
            </a>
            (Created at: {{ $issue['created_at'] }})
        </li>
    @endforeach
</ul>

@endsection
