<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;

class TaskController extends Controller
{
     public function index(User $user)
    {
        return view('tasks.index', [
            'user' => $user,
            'tasks' => $user->tasks
        ]);
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $user->tasks()->create($request->only('title', 'description'));

        return back();
    }

    public function update(Task $task)
    {
        $task->update([
            'status' => $task->status === 'pending' ? 'completed' : 'pending'
        ]);

        return back();
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
