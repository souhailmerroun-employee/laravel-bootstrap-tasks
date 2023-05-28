@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{ $title }}</h1>
            <a href="{{ $link_url }}" class="btn {{ $link_class }}">{{ $link_text }}</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            @yield('task_content')
        </div>
    </div>
</div>

@endsection