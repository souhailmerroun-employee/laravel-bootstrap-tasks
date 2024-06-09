<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Owner</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->user->name }}</td>
                <td>{{ $task->title }}</td>
                <td>
                    @can('view', $task)
                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm">View</a>
                    @endcan
                    @can('update', $task)
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    @endcan
                    @can('delete', $task)
                        @include('tasks.delete_form', ['task' => $task])
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">
                {{ $tasks->links() }}
            </td>
        </tr>
    </tfoot>
</table>
