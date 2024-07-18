@extends('layouts.app')

@section('content')
<h1>Issue #{{ $issue['number'] }}</h1>

<h2>{{ $issue['title'] }}</h2>

<p>Created at: {{ $issue['created_at'] }}</p>

<p>{{ $issue['body'] }}</p>

<a href="{{ route('issues.index') }}">Back to Issues List</a>
@endsection
