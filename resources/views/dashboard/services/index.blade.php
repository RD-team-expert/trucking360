@extends('layouts.dashboard')

@section('title', 'Services')

@section('content')
<h1 class="mb-4">Services</h1>

<a href="{{ route('dashboard.services.create') }}" class="btn btn-primary mb-4">Add New Service</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Icon</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Button URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td><i class="{{ $service->icon }}"></i></td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        @if($service->image)
                            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" style="width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $service->button_url }}</td>
                    <td>
                        <a href="{{ route('dashboard.services.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('dashboard.services.destroy', $service->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
