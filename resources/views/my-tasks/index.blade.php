@extends('layouts.app')

@section('content')
    <h1>My Tasks</h1>
    @can('create', App\Models\Task::class)
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create Task</a>
    @endcan

    @include('tasks.index_table', ['tasks' => $tasks])
@endsection
