<form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@include('debug.form_action', ['routeName' => 'tasks.destroy'])
