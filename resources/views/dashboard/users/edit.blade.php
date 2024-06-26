@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form method="POST" action="/dashboard/users/{{ $user->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-control" id="role" name="role" value="{{ $user->role }}">
                <option value="admin">Admin</option>
                <option value="Sales Team">Sales Team</option>
                <option value="Support Staff">Support Staff</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
