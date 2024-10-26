@extends('layouts.website.app')

@section('title', $service->title)

@section('content')

<!-- Hero Section -->
<section class="gradient-bg text-white py-20">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $service->title }}</h1>
                <p class="text-xl mb-6">{{ $service->description }}</p>
                <a href="#contact" class="bg-secondary text-white px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition-colors duration-300 inline-block" style="visibility: hidden;">
                    {{ $service->button_text ?? 'Get a Quote' }}
                </a>
            </div>
            <div class="md:w-1/2">
                <!-- Adjust image size using Tailwind width (w) and height (h) classes -->
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="rounded-lg shadow-lg w-3/4 h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Content Tabs -->
<section class="py-16">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap mb-8">
            <button onclick="setActiveTab('overview')" class="px-6 py-3 font-semibold transition-colors duration-300 text-secondary border-b-2 border-secondary">Overview</button>
            <button onclick="setActiveTab('features')" class="px-6 py-3 font-semibold transition-colors duration-300 text-gray-600 hover:text-secondary">Features</button>
            {{-- <button onclick="setActiveTab('benefits')" class="px-6 py-3 font-semibold transition-colors duration-300 text-gray-600 hover:text-secondary">Benefits</button> --}}
            <button onclick="setActiveTab('faq')" class="px-6 py-3 font-semibold transition-colors duration-300 text-gray-600 hover:text-secondary">FAQ</button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- Overview Tab -->
            @if($service->overview)
            <div id="overview" class="tab-content">
                <h2 class="text-3xl font-bold text-primary mb-6">Overview</h2>
                <!-- Dynamic content from the overview field -->
                {!! $service->overview !!}
            </div>
            @endif

            <!-- Features Tab -->
            @if($service->features)
            <div id="features" class="tab-content hidden">
                <h2 class="text-3xl font-bold text-primary mb-6">Features</h2>
                <!-- Dynamic content from the features field -->
                {!! $service->features !!}
            </div>
            @endif

            <!-- Benefits Tab -->
            @if($service->benefits)
            <div id="benefits" class="tab-content hidden">
                <h2 class="text-3xl font-bold text-primary mb-6">Benefits</h2>
                <!-- Dynamic content from the benefits field -->
                {!! $service->benefits !!}
            </div>
            @endif

            <!-- FAQ Tab -->
            @if($service->faqs->count() > 0)
            <div id="faq" class="tab-content hidden">
                <h2 class="text-3xl font-bold text-primary mb-6">Frequently Asked Questions</h2>
                @foreach($service->faqs as $faq)
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-primary mb-2">{{ $faq->question }}</h3>
                        <p class="text-gray-600">{{ $faq->answer }}</p>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-primary text-white py-24">
    <div class="container mx-auto px-6 text-center">
        <!-- Title with padding on top and bottom -->
        {{-- <h2 class="text-3xl font-bold mb-6 pt-4">{{ $service->title }}</h2> --}}
        
        <!-- Descriptive text with margin below -->
        <p class="text-xl mb-8 pt-6">
            Have any questions about our services or want to learn more? Reach out to us and we'll get back to you promptly.
        </p>
        
        <!-- Contact Us Button with padding on top -->
        <a href="{{url('/bookings/create')}}" class="bg-secondary text-white px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition-colors duration-300 inline-block mb-6">
            Book a Meeting
        </a>
    </div>
</section>


@endsection

<style>
      .gradient-bg {
    background: repeating-linear-gradient(to right, #2e368f, #e93232);
  }
</style>

<script>
    function setActiveTab(tabId) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.add('hidden');
        });

        // Show the selected tab content
        document.getElementById(tabId).classList.remove('hidden');

        // Update tab button styles
        document.querySelectorAll('button').forEach(button => {
            button.classList.remove('text-secondary', 'border-b-2', 'border-secondary');
            button.classList.add('text-gray-600');
        });

        // Set active tab button style
        event.target.classList.remove('text-gray-600');
        event.target.classList.add('text-secondary', 'border-b-2', 'border-secondary');
    }
</script>
