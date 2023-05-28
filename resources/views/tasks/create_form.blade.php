<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    @include('components.input', ['name' => 'title', 'label' => 'Title', 'required' => true])
    @include('components.textarea', ['name' => 'description', 'label' => 'Description', 'required' => false])
    <button type="submit" class="btn btn-primary">Create Task</button>
</form>