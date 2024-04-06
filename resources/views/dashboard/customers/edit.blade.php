@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Edit Customer</h2>
    <form action="{{ route('dashboard.customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $customer->address }}" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $customer->city }}" required>
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state" value="{{ $customer->state }}" required>
        </div>
        <div class="form-group">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" value="{{ $customer->zip }}" required>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ $customer->country }}" required>
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company" value="{{ $customer->company }}" required>
        </div>
        <div class="form-group">
            <label for="segment">Segment</label>
            <select class="form-control" id="customer_segment" name="customer_segment">
                <option value="">Select a Segment</option>
                @foreach ($segments as $segment)
                <option value="{{ $segment->id }}" {{$customer->customerSegment && $customer->customerSegment->id == $segment->id? 'selected':''}}> {{ $segment->name }}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
