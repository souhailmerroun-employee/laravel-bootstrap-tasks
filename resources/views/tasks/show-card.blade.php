<div class="card">
    <div class="card-body">
        <p><strong>Title:</strong> {{ $task->title }}</p>
        <p><strong>Description:</strong> {{ $task->description }}</p>

        @can('update', $task)
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning me-2">Edit</a>
        @endcan

        @can('delete', $task)
            @include('tasks.delete_form', ['task' => $task])
        @endcan
    </div>
</div>
