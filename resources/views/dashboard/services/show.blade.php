@extends('layouts.website.app')

@section('title', $service->title)

@section('content')
<!-- Service Detail Section -->
<section class="service-detail section">
    <div class="container">
        <h1>{{ $service->title }}</h1>
        @if($service->image)
            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="img-fluid mb-4">
        @endif
        <div>
            {!! $service->content !!}
        </div>
    </div>
</section>
@endsection
