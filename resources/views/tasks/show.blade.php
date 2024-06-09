@extends('layouts.app')

@section('content')
    <h1>Task Details</h1>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
    
    @include('tasks.delete_form', ['task' => $task])
    
    <a href="{{ route('tasks.index') }}">Back to List</a>
@endsection
