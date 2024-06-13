<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Owner</th>
            <th>Title</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>
                    {{ $task->user->name }}
                </td>
                <td>
                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
                </td>
                <td>{{ $task->updated_at->diffForHumans() }}</td>
                <td>
                    @can('update', $task)
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-link text-warning">Edit</a>
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
