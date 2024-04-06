@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Customer Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $customer->name }}</h5>
            <p class="card-text">Email: {{ $customer->email }}</p>
            <p class="card-text">Phone: {{ $customer->phone }}</p>
            <p class="card-text">Address: {{ $customer->address }}</p>
            <p class="card-text">City: {{ $customer->city }}</p>
            <p class="card-text">State: {{ $customer->state }}</p>
            <p class="card-text">Zip: {{ $customer->zip }}</p>
            <p class="card-text">Country: {{ $customer->country }}</p>
            <p class="card-text">Company: {{ $customer->company }}</p>
            <p class="card-text">Segment: {{ $customer->customerSegment->name }}</p>
            <a href="{{ route('dashboard.customers.edit', $customer->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection
