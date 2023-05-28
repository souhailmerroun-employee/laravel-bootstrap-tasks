@extends('tasks.layout', [
    'title' => 'Create Task',
    'link_url' => route('tasks.index'),
    'link_class' => 'btn-secondary',
    'link_text' => 'Back'
])

@section('task_content')
    @include('tasks.create_form')
@endsection
