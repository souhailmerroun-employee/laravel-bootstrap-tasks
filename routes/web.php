<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MyTaskController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/', '/tasks');

Route::resource('tasks', TaskController::class);

Route::get('/my-tasks', [MyTaskController::class, 'index'])->name('my-tasks.index');