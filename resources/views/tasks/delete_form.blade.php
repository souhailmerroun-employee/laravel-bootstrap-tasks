<form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure you want to do this action?');">Delete</button>
</form>
@include('debug.form_action', ['routeName' => 'tasks.destroy'])
