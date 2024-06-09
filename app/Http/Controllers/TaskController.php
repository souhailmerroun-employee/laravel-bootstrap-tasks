<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Repositories\TaskRepository;
use App\Models\Task;

class TaskController extends Controller
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->middleware('auth');

        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        $this->authorize('viewAny', Task::class);

        $tasks = $this->taskRepository->getAll();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        $this->taskRepository->create($request->validated());

        session()->flash('success', __('messages.task_created'));

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        $this->authorize('view', $task);

        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $this->authorize('update', $task);

        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $this->authorize('update', $task);

        $this->taskRepository->update($task, $request->validated());

        session()->flash('success', __('messages.task_updated'));

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $this->authorize('delete', $task);

        $this->taskRepository->delete($task);
        
        session()->flash('success', __('messages.task_deleted'));

        return redirect()->route('tasks.index');
    }
}
