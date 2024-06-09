@extends('layouts.app')

@section('content')
    <h1>Create New Task</h1>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Back to List</a>

    @include('tasks.create_form')
@endsection
