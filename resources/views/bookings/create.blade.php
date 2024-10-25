@extends('layouts.website.app')

@section('title', 'Book a Meeting')

@section('content')

<!-- Hero Section (Specific for the Book a Meeting Page) -->
<section class="bg-primary text-white py-20">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Book a Meeting with Us</h1>
                <p class="text-xl mb-6">Schedule a convenient time to discuss your needs, and let us assist you with the best solutions for your business.</p>
                <a href="#form-section" class="bg-secondary text-white px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition-colors duration-300 inline-block">
                    Get Started
                </a>
            </div>
            <div class="md:w-1/2" style="visibility: hidden;">
                <img src="https://placehold.co/600x400?text=Book+a+Meeting" alt="Book a Meeting" class="rounded-lg shadow-lg invisible">
            </div>
        </div>
    </div>
</section>


<!-- Booking Form Section -->
<div id="form-section" class="container-booking bg-gray-50 min-h-screen flex items-center justify-center py-20">
    <div class="max-w-xl w-full bg-white shadow-lg rounded-lg p-8">
        <!-- Title -->
        {{-- <h1 class="text-center text-4xl font-bold text-gray-900 mb-8">Book a Meeting</h1> --}}

        <!-- Display Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-4">
                <h4 class="font-bold">{{ session('title') }}</h4>
                <p>{{ session('message') }}</p>
            </div>
        @endif

        <!-- Booking Form -->
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf

            <!-- Date -->
            <div class="mb-5">
                <label for="date" class="block text-gray-700 font-medium mb-2">Preferred Date</label>
                <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('date') border-red-500 @enderror" id="date" name="date" value="{{ old('date') }}" required>
                @error('date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- First Name -->
            <div class="mb-5">
                <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('first_name') border-red-500 @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                @error('first_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="mb-5">
                <label for="last_name" class="block text-gray-700 font-medium mb-2">Last Name</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('last_name') border-red-500 @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                @error('last_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-5">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone Number -->
            <div class="mb-5">
                <label for="phone_number" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('phone_number') border-red-500 @enderror" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                @error('phone_number')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Domicile -->
            <div class="mb-5">
                <label for="domicile" class="block text-gray-700 font-medium mb-2">Domicile</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('domicile') border-red-500 @enderror" id="domicile" name="domicile" value="{{ old('domicile') }}" required>
                @error('domicile')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- <!-- Address -->
            <div class="mb-5">
                <label for="address" class="block text-gray-700 font-medium mb-2">Address</label>
                <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('address') border-red-500 @enderror" id="address" name="address" rows="2" required>{{ old('address') }}</textarea>
                @error('address')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div> --}}

            <!-- Description -->
            <div class="mb-5">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description of Meeting</label>
                <textarea class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-secondary text-white px-8 py-3 rounded-full font-bold hover:bg-opacity-90 transition-colors duration-300">
                Book Meeting
            </button>
        </form>
    </div>
</div>

<!-- Styling the container -->
<style>
.container-booking {
    background: #f9fafb; /* Light background */
}
</style>
@endsection
