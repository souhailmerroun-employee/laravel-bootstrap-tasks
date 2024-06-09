<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    @include('tasks.delete_form', ['task' => $task])
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
