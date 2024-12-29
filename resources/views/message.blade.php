<!-- resources/views/errors/404.blade.php -->
@extends('layouts.website.app')

@section('title', 'Notification')

@section('content')
    <!-- Page Header Start -->
    <div class="bg-primary py-20 mb-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold text-white mb-4 animate-slideInDown">
                {{ $header ?? 'Notification' }}
            </h1>
            <nav aria-label="breadcrumb" class="animate-slideInDown">
                <ol class="inline-flex items-center space-x-2 text-white">
                    <li><a href="{{ url('/') }}" class="hover:text-gray-300">Home</a></li>
                    <li><span class="text-gray-400">/</span></li>
                    <li class="text-gray-300">{{ $breadcrumb ?? 'Message' }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Notification Start -->
    <div class="container mx-auto px-6 py-20">
        <div class="flex justify-center">
            <div class="text-center">
                @if(session('success'))
                    <i class="bi bi-check-circle text-6xl text-green-500"></i>
                    <h1 class="text-5xl font-bold mt-4">Success</h1>
                    <h2 class="text-3xl font-semibold mt-4">{{ session('header') ?? 'Operation Successful' }}</h2>
                    <p class="text-lg mt-4">{{ session('message') ?? 'The operation completed successfully.' }}</p>
                    <a href="{{ url('/') }}" class="bg-green-500 text-white py-3 px-6 rounded-full mt-8 inline-block hover:bg-green-600">Go Back To Home</a>
                @elseif(session('error'))
                    <i class="bi bi-exclamation-triangle text-6xl text-red-500"></i>
                    <h1 class="text-5xl font-bold mt-4">Error</h1>
                    <h2 class="text-3xl font-semibold mt-4">{{ session('header') ?? 'Operation Failed' }}</h2>
                    <p class="text-lg mt-4">{{ session('message') ?? 'There was an issue with the operation.' }}</p>
                    <a href="{{ url('/') }}" class="bg-red-500 text-white py-3 px-6 rounded-full mt-8 inline-block hover:bg-red-600">Go Back To Home</a>
                @else
                    <i class="bi bi-exclamation-triangle text-6xl text-blue-500"></i>
                    <h1 class="text-5xl font-bold mt-4">404</h1>
                    <h2 class="text-3xl font-semibold mt-4">Page Not Found</h2>
                    <p class="text-lg mt-4">We’re sorry, the page you have looked for does not exist on our website!</p>
                    <a href="{{ url('/') }}" class="bg-blue-500 text-white py-3 px-6 rounded-full mt-8 inline-block hover:bg-blue-600">Go Back To Home</a>
                @endif
            </div>
        </div>
    </div>
    <!-- Notification End -->
@endsection
