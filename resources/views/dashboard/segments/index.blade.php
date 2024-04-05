@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Segments</h2>
    <a href="{{ route('dashboard.segments.create') }}" class="btn btn-primary">Add New Segment</a>
    <div class="mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($segments as $segment)
                <tr>
                    <td>{{ $segment->name }}</td>
                    <td>{{ $segment->description }}</td>
                    <td>
                        <a href="{{ route('dashboard.segments.edit', $segment->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('dashboard.segments.destroy', $segment->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
