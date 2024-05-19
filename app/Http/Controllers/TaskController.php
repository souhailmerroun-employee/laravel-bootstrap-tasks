<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->paginate(10);

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        Task::create($request->validated());

        return redirect()->route('tasks.index')->with('flash', ['type' => 'success', 'message' => 'Task created successfully.']);
    }

    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('tasks.index')->with('flash', ['type' => 'success', 'message' => 'Task updated successfully.']);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('flash', ['type' => 'success', 'message' => 'Task deleted successfully.']);
    }
}
