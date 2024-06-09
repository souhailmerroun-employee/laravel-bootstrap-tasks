<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/', '/tasks');

Route::resource('tasks', TaskController::class);
