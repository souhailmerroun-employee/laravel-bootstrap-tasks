<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')
    @include('components.input', ['name' => 'title', 'label' => 'Title', 'value' => $task->title, 'required' => true])
    @include('components.textarea', ['name' => 'description', 'label' => 'Description', 'value' => $task->description, 'required' => false])
    @include('components.checkbox', ['name' => 'completed', 'label' => 'Completed', 'value' => $task->completed])
    <button type="submit" class="btn btn-primary">Update Task</button>
</form>