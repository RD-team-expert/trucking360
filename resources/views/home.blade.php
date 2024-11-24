<!-- resources/views/home.blade.php -->

@extends('layouts.website.app')

@section('title', 'Trucking360 - Home')

@section('content')
    @include('components.website.hero')
    @include('components.website.whyus')
    {{-- @include('components.website.services') --}}
    {{-- @include('components.website.about') --}}
    {{-- @include('components.website.clients') --}}
    {{-- @include('components.website.stats') --}}
    @include('components.website.calltoaction')
    {{-- @include('components.website.testimonials') --}}
    @include('components.website.faq')
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
          <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-8">
              <h2 class="text-3xl font-bold text-[#2e368f] mb-4">Stay Updated with Trucking 360</h2>
              <p class="text-gray-600 mb-6">Subscribe to our newsletter for the latest updates on logistics solutions and AFP support.</p>
              <form id="newsletter-form" class="space-y-4">
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                  <input type="email" id="email" name="email" required
                         class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#2e368f] focus:border-[#2e368f]"
                         placeholder="you@example.com">
                </div>
                <div>
                  <button type="submit"
                          class="w-full bg-[#2e368f] text-white py-2 px-4 rounded-md hover:bg-[#232a70] transition duration-300 ease-in-out flex items-center justify-center">
                    <span>Subscribe</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>
              </form>
              <div id="form-message" class="mt-4 text-center hidden"></div>
            </div>
          </div>
        </div>
      </section>
      
      <script>
      document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('newsletter-form');
        const messageDiv = document.getElementById('form-message');
      
        form.addEventListener('submit', function(e) {
          e.preventDefault();
          const email = document.getElementById('email').value;
      
          // Basic email validation
          if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
            showMessage('Please enter a valid email address.', 'text-[#e93232]');
            return;
          }
      
          // Here you would typically send the data to your Laravel backend
          // For now, we'll just simulate a successful subscription
          showMessage('Thank you for subscribing!', 'text-green-600');
          form.reset();
        });
      
        function showMessage(message, colorClass) {
          messageDiv.textContent = message;
          messageDiv.className = `mt-4 text-center ${colorClass}`;
          messageDiv.classList.remove('hidden');
        }
      });
      </script>
    @include('components.website.contact')
@endsection
