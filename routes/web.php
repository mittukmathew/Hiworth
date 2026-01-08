<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
;
use App\Http\Controllers\TaskController;

Route::get('/', [UserController::class, 'index']);
Route::resource('users', UserController::class)->only(['index', 'create', 'store']);
Route::get('users/{user}/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('users/{user}/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::patch('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
