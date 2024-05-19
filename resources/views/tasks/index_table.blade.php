<table>
    <thead>
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
                    <a href="{{ route('tasks.show', $task->id) }}">View</a>
                    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                    @include('tasks.delete_form', ['task' => $task])
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
