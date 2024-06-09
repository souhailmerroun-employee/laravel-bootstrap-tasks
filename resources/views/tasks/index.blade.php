@extends('layouts.app')

@section('content')
    <h1>Task List</h1>

    @include('tasks.index_table', ['tasks' => $tasks])
@endsection
