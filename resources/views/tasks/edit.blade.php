@extends('layouts.app')

@section('content')
    
    <h1>Edit Task</h1>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Back to List</a>

    @include('tasks.edit_form', ['task' => $task])

@endsection
