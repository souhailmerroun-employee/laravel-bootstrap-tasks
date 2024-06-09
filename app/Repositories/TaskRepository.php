<?php

namespace App\Repositories;

use App\Models\Task;

class TaskRepository
{
    public function getAll()
    {
        return Task::with('user')->paginate(10);
    }

    public function find($id)
    {
        return Task::find($id);
    }

    public function create(array $data)
    {
        $task = new Task();
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->save();
        return $task;
    }

    public function update(Task $task, array $data)
    {
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->save();
        return $task;
    }

    public function delete(Task $task)
    {
        $task->delete();
        return $task;
    }
}
