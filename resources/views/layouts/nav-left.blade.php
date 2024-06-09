<li class="nav-item">
    <a class="nav-link" href="{{ route('tasks.index') }}">{{ __('Tasks') }}</a>
</li>

@auth
    <li class="nav-item">
        <a class="nav-link" href="{{ route('my-tasks.index') }}">{{ __('My Tasks') }}</a>
    </li>
@endauth
