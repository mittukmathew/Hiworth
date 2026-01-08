@extends('layouts.app')

@section('content')
<h2>Users</h2>

<a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create User</a>

<table class="table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Tasks</th>
        <th></th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->tasks_count }}</td>
        <td>
            <a href="{{ route('tasks.index', $user) }}" class="btn btn-sm btn-info">View Tasks</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection