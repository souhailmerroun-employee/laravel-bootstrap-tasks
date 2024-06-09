@extends('layouts.app')

@section('content')
    <h1>Create New Task</h1>

    @include('tasks.create_form')

    <a href="{{ route('tasks.index') }}">Back to List</a>
@endsection
