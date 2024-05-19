@extends('layout')

@section('content')
    <h1>Edit Task</h1>

    @include('tasks.edit_form', ['task' => $task])

    <a href="{{ route('tasks.index') }}">Back to List</a>
@endsection
