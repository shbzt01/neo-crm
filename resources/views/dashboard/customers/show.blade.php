@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Customer Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $customer->name }}</h5>
            <p class="card-text">Email: {{ $customer->email }}</p>
            <p class="card-text">Notes: {{ $customer->notes }}</p>
        </div>
    </div>
</div>
@endsection
