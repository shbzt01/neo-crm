@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Edit Lead</h2>
    <form action="{{ route('dashboard.leads.update', $lead->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $lead->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $lead->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $lead->phone }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="submit" name="convert_to_customer" value="1" class="btn btn-success">Convert to Customer</button>
    </form>
</div>
@endsection
