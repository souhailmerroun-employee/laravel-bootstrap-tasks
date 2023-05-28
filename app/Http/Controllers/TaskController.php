<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // paginate the tasks
        $tasks = Task::orderBy('created_at', 'desc')->paginate(10);

        // return the view with the tasks
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return the view
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        // create the task
        Task::create($request->validated());

        // redirect to the tasks index with a success message
        return redirect()->route('tasks.index')->with('flash', ['type' => 'success', 'message' => 'Task created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        // return the view with the task
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        // update the task
        $task->update($request->validated());

        // redirect to the tasks index with a success message
        return redirect()->route('tasks.index')->with('flash', ['type' => 'success', 'message' => 'Task updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // delete the task
        $task->delete();

        // redirect to the tasks index with a success message
        return redirect()->route('tasks.index')->with('flash', ['type' => 'success', 'message' => 'Task deleted successfully.']);
    }
}
