@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Leads</h2>
    <a href="{{ route('dashboard.leads.create') }}" class="btn btn-primary">Add New Lead</a>
    <table class="table table-responsive-md table-striped mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leads as $lead)
            <tr>
                <td>{{ $lead->name }}</td>
                <td>{{ $lead->email }}</td>
                <td>{{ $lead->phone }}</td>
                <td>
                    <a href="{{ route('dashboard.leads.edit', $lead->id) }}" class="btn btn-sm btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
