@extends('layouts.dashboard')

@section('title', 'About')

@section('content')
<h1 class="mb-4">About Page</h1>

<!-- Notification -->
@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

<!-- About Us Section -->
<div class="card mb-4">
    <div class="card-header">
        <h2>About Us</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('dashboard.about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $about->title ?? '' }}" required>
            </div>

            <!-- Main Text -->
            <div class="mb-3">
                <label for="main_text" class="form-label">Main Text</label>
                <textarea class="form-control" id="main_text" name="main_text" required>{{ $about->main_text ?? '' }}</textarea>
            </div>

            <!-- Description Text -->
            <div class="mb-3">
                <label for="description_text" class="form-label">Description Text</label>
                <textarea class="form-control" id="description_text" name="description_text" required>{{ $about->description_text ?? '' }}</textarea>
            </div>

            <!-- Description (If needed) -->
            <div class="mb-3">
                <label for="description" class="form-label">Additional Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ $about->description ?? '' }}</textarea>
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">Main Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($about && $about->image)
                    <img src="{{ asset('storage/' . $about->image) }}" alt="Current Image" class="img-thumbnail mt-2" style="width: 150px;">
                @endif
            </div>

            <!-- Additional Image Upload -->
            <div class="mb-3">
                <label for="additional_image" class="form-label">Additional Image (with Play Button)</label>
                <input type="file" class="form-control" id="additional_image" name="additional_image">
                @if($about && $about->additional_image)
                    <img src="{{ asset('storage/' . $about->additional_image) }}" alt="Current Additional Image" class="img-thumbnail mt-2" style="width: 150px;">
                @endif
            </div>

            <!-- Video URL -->
            <div class="mb-3">
                <label for="video_url" class="form-label">YouTube Video URL</label>
                <input type="url" class="form-control" id="video_url" name="video_url" value="{{ $about->video_url ?? '' }}">
            </div>

            <!-- Button URL -->
            <div class="mb-3">
                <label for="button_url" class="form-label">Button URL</label>
                <input type="url" class="form-control" id="button_url" name="button_url" value="{{ $about->button_url ?? '' }}">
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>

        @if(empty($about))
            <p class="text-muted mt-3">Currently, there is no "About Us" content. Please fill out the form above to add content.</p>
        @endif
    </div>
</div>

<!-- The rest of your page -->

@endsection

<!-- Include TinyMCE -->
<script src="https://cdn.tiny.cloud/1/r1racrxd2joy9wp9xp9sj91ka9j4m3humenifqvwtx9s6i3y/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#main_text, #description_text, #description',
        plugins: 'lists link image preview',
        toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview',
        height: 300
    });
</script>
