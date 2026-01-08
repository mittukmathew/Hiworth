@extends('layouts.app')

@section('content')
<h2>{{ $user->name }}'s Tasks</h2>
<a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">
    ← Back to Users
</a>
<form method="POST" action="{{ route('tasks.store', $user) }}" class="mb-3">
    @csrf
    <input class="form-control mb-2" name="title" placeholder="Task title">
    <textarea class="form-control mb-2" name="description" placeholder="Description"></textarea>
    <button class="btn btn-primary">Add Task</button>
</form>

<table class="table">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    @foreach($tasks as $task)
    <tr>
        <td>{{ $task->title }}</td>
        <td>{{ $task->status }}</td>
        <td>
            <form method="POST" action="{{ route('tasks.update', $task) }}" class="d-inline">
                @csrf @method('PATCH')
                <button class="btn btn-sm btn-warning">Toggle</button>
            </form>

            <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection