@extends('dashboard.layout')

@section('content')
<div class="container">
    <h1>Users</h1>
    <div class="row">
        @foreach($users as $user)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">{{ $user->email }}</p>
                        <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection