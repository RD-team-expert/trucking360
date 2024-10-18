<!-- resources/views/dashboard/services/form.blade.php -->

@extends('layouts.dashboard')

@section('title', $service ? 'Edit Service' : 'Add New Service')

@section('content')
    <h1 class="mb-4">{{ $service ? 'Edit Service' : 'Add New Service' }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input:
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ $service ? route('dashboard.services.update', $service->id) : route('dashboard.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($service)
            @method('PUT')
        @endif

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $service->title ?? '') }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Icon -->
        <div class="mb-3">
            <label for="icon" class="form-label">Icon (Font Awesome Class) <span class="text-danger">*</span></label>
            <input type="text" name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon', $service->icon ?? 'fas fa-truck') }}" required>
            <div class="form-text">Example: <code>fas fa-truck</code></div>
            @error('icon')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ old('description', $service->description ?? '') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Overview -->
        <div class="mb-3">
            <label for="overview" class="form-label">Overview</label>
            <textarea name="overview" id="overview" class="form-control @error('overview') is-invalid @enderror" rows="5">{{ old('overview', $service->overview ?? '') }}</textarea>
            @error('overview')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Features -->
        <div class="mb-3">
            <label for="features" class="form-label">Features</label>
            <textarea name="features" id="features" class="form-control @error('features') is-invalid @enderror" rows="5">{{ old('features', $service->features ?? '') }}</textarea>
            @error('features')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Benefits -->
        <div class="mb-3">
            <label for="benefits" class="form-label">Benefits</label>
            <textarea name="benefits" id="benefits" class="form-control @error('benefits') is-invalid @enderror" rows="5">{{ old('benefits', $service->benefits ?? '') }}</textarea>
            @error('benefits')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Content -->
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ old('content', $service->content ?? '') }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            @if(isset($service) && $service->image)
                <div class="mb-2">
                    <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="img-thumbnail" style="max-width: 200px;">
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Button URL -->
        <div class="mb-3">
            <label for="button_url" class="form-label">Button URL</label>
            <input type="url" name="button_url" id="button_url" class="form-control @error('button_url') is-invalid @enderror" value="{{ old('button_url', $service->button_url ?? '') }}">
            @error('button_url')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- FAQs Section -->
        <div class="mb-4">
            <label class="form-label">FAQs</label>
            <div id="faqs-container">
                @if(isset($service) && $service->faqs)
                    @foreach($service->faqs as $index => $faq)
                        <div class="card mb-3 faq-item" data-index="{{ $index }}">
                            <div class="card-body">
                                <input type="hidden" name="faqs[{{ $index }}][id]" value="{{ $faq->id }}">
                                <div class="mb-3">
                                    <label for="faqs[{{ $index }}][question]" class="form-label">Question</label>
                                    <input type="text" name="faqs[{{ $index }}][question]" id="faqs[{{ $index }}][question]" class="form-control @error('faqs.' . $index . '.question') is-invalid @enderror" value="{{ old('faqs.' . $index . '.question', $faq->question) }}" required>
                                    @error('faqs.' . $index . '.question')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="faqs[{{ $index }}][answer]" class="form-label">Answer</label>
                                    <textarea name="faqs[{{ $index }}][answer]" id="faqs[{{ $index }}][answer]" class="form-control @error('faqs.' . $index . '.answer') is-invalid @enderror" rows="3" required>{{ old('faqs.' . $index . '.answer', $faq->answer) }}</textarea>
                                    @error('faqs.' . $index . '.answer')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="button" class="btn btn-danger btn-sm remove-faq">Remove FAQ</button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <button type="button" class="btn btn-secondary" id="add-faq">Add FAQ</button>
        </div>

        <button type="submit" class="btn btn-primary">{{ $service ? 'Update Service' : 'Add Service' }}</button>
    </form>

    <!-- Include TinyMCE or another WYSIWYG editor if needed -->
    <script src="https://cdn.tiny.cloud/1/r1racrxd2joy9wp9xp9sj91ka9j4m3humenifqvwtx9s6i3y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#overview, textarea#features, textarea#benefits, textarea#content',
            plugins: 'link image code lists',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
            height: 300
        });

        // Dynamic FAQs Handling
        let faqIndex = {{ isset($service) ? $service->faqs->count() : 0 }};

        document.getElementById('add-faq').addEventListener('click', function() {
            const container = document.getElementById('faqs-container');
            const faqItem = document.createElement('div');
            faqItem.classList.add('card', 'mb-3', 'faq-item');
            faqItem.setAttribute('data-index', faqIndex);

            faqItem.innerHTML = `
                <div class="card-body">
                    <div class="mb-3">
                        <label for="faqs[${faqIndex}][question]" class="form-label">Question</label>
                        <input type="text" name="faqs[${faqIndex}][question]" id="faqs[${faqIndex}][question]" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="faqs[${faqIndex}][answer]" class="form-label">Answer</label>
                        <textarea name="faqs[${faqIndex}][answer]" id="faqs[${faqIndex}][answer]" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm remove-faq">Remove FAQ</button>
                </div>
            `;
            container.appendChild(faqItem);
            faqIndex++;
        });

        // Remove FAQ Handler
        document.getElementById('faqs-container').addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-faq')) {
                e.target.closest('.faq-item').remove();
            }
        });
    </script>
@endsection
