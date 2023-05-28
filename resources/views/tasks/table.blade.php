<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->created_at->diffForHumans() }}</td>
            <td>{{ $task->updated_at->diffForHumans() }}</td>
            <td>
                <a href="{{ route('tasks.show', $task) }}" class="btn btn-link">View</a>
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>