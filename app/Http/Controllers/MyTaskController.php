<?php

namespace App\Http\Controllers;

class MyTaskController extends TaskController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        $tasks = $user->tasks;

        return view('my-tasks.index', compact('tasks'));
    }
}