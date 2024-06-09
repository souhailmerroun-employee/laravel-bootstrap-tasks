
@include('debug.form_action', ['routeName' => 'tasks.store'])
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Task</button>
    <button type="button" class="btn btn-secondary" onclick="quickFill();">Quick Fill</button>
</form>

<script>
    function quickFill() {
        document.getElementById('title').value = 'Quick Fill Title';
        document.getElementById('description').value = 'Quick Fill Description';
    }
</script>
