@extends('tasks.layout', [
    'title' => 'Edit Task',
    'link_url' => route('tasks.index'),
    'link_class' => 'btn-secondary',
    'link_text' => 'Back'
])

@section('task_content')
    @include('tasks.edit_form', ['task' => $task])
@endsection
