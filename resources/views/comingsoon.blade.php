<!-- resources/views/comingsoon.blade.php -->
@extends('layouts.website.app')

@section('title', 'Coming Soon')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="text-center">
            <h1 class="text-5xl font-bold mb-4">Coming Soon</h1>
            <p class="text-xl text-gray-700 mb-6">Our dashboard page is under construction. Please check back soon!</p>
            <a href="{{ url('/') }}" class="bg-primary text-white px-6 py-3 rounded-full hover:bg-secondary transition-colors duration-300">
                Go Back to Home
            </a>
        </div>
    </div>
@endsection
