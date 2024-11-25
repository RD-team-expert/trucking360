<!-- resources/views/comingsoon.blade.php -->
{{-- @extends('layouts.website.app')

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
@endsection --}}

@extends('layouts.website.app')
@section('title', 'Coming Soon')

@section('content')
   







    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'spin-slow': 'spin 15s linear infinite',
                        'gradient': 'gradient 15s ease infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(100%)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        gradient: {
                            '0%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                            '100%': { backgroundPosition: '0% 50%' },
                        },
                    }
                },
            },
        }
    </script>
    <style>
        .enhanced-gradient {
            background: linear-gradient(-45deg, #2e368f, #4a51a8, #e93232, #ed5858);
            background-size: 400% 400%;
            opacity: 0.8; /* Adjust opacity for gradient to display the video */
            animation: gradient 15s ease infinite;
        }
    
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(45deg, #e93232, #2e368f);
            background-size: 200% 200%;
            animation: gradient 5s ease infinite;
        }
    
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
    </style>
    
    <div class="min-h-screen enhanced-gradient flex flex-col justify-between p-6 md:p-12 text-white overflow-hidden relative">
        <!-- Video Background -->
        <video autoplay muted loop class="video-background">
            <source src="{{asset('website/img/dahsboard.mp4')}}" type="video/mp4" /> <!-- Replace 'path/to/your/video.mp4' with your video URL -->
            Your browser does not support the video tag.
        </video>
    
        <!-- Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -left-1/4 -top-1/4 w-1/2 h-1/2 bg-[#e93232]/20 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute -right-1/4 -bottom-1/4 w-3/4 h-3/4 bg-[#2e368f]/20 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: -2s;"></div>
        </div>
    
        <!-- Main Content -->
        <div class="flex flex-col md:flex-row items-center justify-center flex-grow">
            <div class="md:w-1/2 text-center md:text-left mb-12 md:mb-0 opacity-0" id="mainContent">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight">
                    The Future is <span class="text-gradient">Coming Soon</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-lg">
                    We're crafting something extraordinary. Prepare to experience innovation like never before.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center items-center opacity-0" id="rocketSection" style="visibility: hidden;">
                <div class="relative">
                    <div class="w-64 h-64 md:w-96 md:h-96 bg-white/20 rounded-full flex items-center justify-center animate-float opacity-75">
                        <img class="md:opacity-100" src="{{ asset('website/img/360logo.png') }}" alt="" style="width: 250px ;">
                    </div>
                </div>
            </div>
        </div>
    
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                setTimeout(() => {
                    document.getElementById('topSection').classList.add('animate-slide-up');
                    document.getElementById('topSection').classList.remove('opacity-0');
                }, 0);
    
                setTimeout(() => {
                    document.getElementById('mainContent').classList.add('animate-slide-up');
                    document.getElementById('mainContent').classList.remove('opacity-0');
                }, 200);
    
                setTimeout(() => {
                    document.getElementById('rocketSection').classList.add('animate-slide-up');
                    document.getElementById('rocketSection').classList.remove('opacity-0');
                }, 400);
    
                setTimeout(() => {
                    document.getElementById('bottomSection').classList.add('animate-slide-up');
                    document.getElementById('bottomSection').classList.remove('opacity-0');
                }, 600);
            });
        </script>
    </div>
    @endsection