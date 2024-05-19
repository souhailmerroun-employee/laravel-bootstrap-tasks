<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('tasks.index') }}">Home</a>
            <a href="{{ route('tasks.create') }}">Create Task</a>
        </nav>
    </header>
    <main>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Task Manager</p>
    </footer>
</body>

</html>
