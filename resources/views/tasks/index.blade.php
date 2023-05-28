@extends('tasks.layout', [
    'title' => 'Tasks',
    'link_url' => route('tasks.create'),
    'link_class' => 'btn-primary',
    'link_text' => 'Create Task'
])

@section('task_content')
    @include('tasks.table', ['tasks' => $tasks])
@endsection
