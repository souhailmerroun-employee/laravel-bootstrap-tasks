<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('tasks', TaskController::class);