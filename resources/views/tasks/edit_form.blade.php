<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $task->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Task</button>
</form>
@include('debug.form_action', ['routeName' => 'tasks.update'])
