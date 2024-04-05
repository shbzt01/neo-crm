@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Customers</h2>
    <a href="{{ route('dashboard.customers.create') }}" class="btn btn-primary">Add New Customer</a>
    <div class="mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>
                        <a href="{{ route('dashboard.customers.edit', $customer->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ route('dashboard.customers.show', $customer->id) }}" class="btn btn-sm btn-success">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
