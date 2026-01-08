@extends('layouts.app')

@section('content')
<h2>Create User</h2>
<a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">
    ← Back to Users
</a>
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <input class="form-control mb-2" name="name" placeholder="Name">
    <input class="form-control mb-2" name="email" placeholder="Email">
    <button class="btn btn-success">Save</button>
</form>
@endsection