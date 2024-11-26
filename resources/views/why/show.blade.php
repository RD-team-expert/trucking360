@extends('layouts.website.app')

@section('title', 'Trucking360 - Why T360')

@section('content')

  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

  <section id="why" class="text-primary bg-gray-100 px-4 py-24">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold text-center mb-2">Our Commitment to Excellence</h2>
        <h1 class="text-4xl font-bold text-center mb-6">Why Choose Us!</h1>
        <p class="text-center mb-12 max-w-3xl mx-auto">
            Discover why we’re the preferred choice for AFPs. With a client-first approach, we deliver efficient, tailored solutions that drive your business toward achieving a Fantastic Plus rating. Our team combines expertise, transparency, and accountability to ensure your success, supported by consistent performance and comprehensive services.        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="feature-card bg-primary p-6 rounded-lg transition-all duration-300 transform hover:-translate-y-2">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon w-12 h-12 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Reliability</h3>
                <p class="text-gray-300">We guarantee that your loads are managed efficiently, meeting Amazon's strict schedules and safety standards on every trip.</p>
            </div>
            <div class="feature-card bg-primary p-6 rounded-lg transition-all duration-300 transform hover:-translate-y-2">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon w-12 h-12 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Cost Efficiency</h3>
                <p class="text-gray-300">Through optimized dispatching and proactive planning, we help you keep costs down while maintaining the highest level of service.</p>
            </div>
            <div class="feature-card bg-primary p-6 rounded-lg transition-all duration-300 transform hover:-translate-y-2">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon w-12 h-12 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Safety-Driven Focus</h3>
                <p class="text-gray-300">Our expert safety team offers detailed reports and guidance, helping to minimize violations and protect your drivers and business reputation.</p>
            </div>
            <div class="feature-card bg-primary p-6 rounded-lg transition-all duration-300 transform hover:-translate-y-2">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon w-12 h-12 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2 text-white">Customized Solutions and transparency</h3>
                <p class="text-gray-300">We understand that every AFP has unique needs. Our flexible solutions are designed to your specific goals, ensuring alignment with Amazon's high expectations. We will keep you informed at every step, from dispatch updates to safety insights, so you're always in the loop.</p>
            </div>
        </div>
    </div>
</section>

@endsection