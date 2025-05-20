<section class="max-w-7xl mx-auto px-6 py-16 md:py-24 lg:px-8 bg-gray-100">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <!-- Left Column - Video (previously on right) -->
        <div class="relative aspect-video bg-black rounded-xl overflow-hidden shadow-xl" data-aos="fade-in"
            data-aos-duration="800" data-aos-delay="200">
            <video class="w-full h-full object-cover" controls data-aos="fade-in" data-aos-delay="0"
                data-aos-duration="500">
                <source src="{{ asset('website/img/t360-home.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Right Column - Text Content (previously on left) -->
        <div class="space-y-10 md:pl-8" data-aos="fade-in" data-aos-duration="800">
            {{-- <h2 class="text-3xl md:text-4xl font-bold text-primary leading-tight" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="500">
                Success Stories
            </h2> --}}

            <blockquote class="text-2xl md:text-3xl font-semibold text-gray-800 leading-tight" data-aos="fade-in"
                data-aos-delay="400" data-aos-duration="500">
                <span class="text-primary">Hear directly from our partners and their drivers:</span>
            </blockquote>

            <div class="space-y-4 border-l-4 border-primary pl-6" data-aos="fade-in" data-aos-delay="600"
                data-aos-duration="500">
                <p class="text-lg text-gray-700 leading-relaxed">
                    Go beyond the numbers and listen to real stories from the people who experience our services
                    firsthand. Our partners and their drivers share their thoughts, experiences, and the impact our
                    services have had on their business and daily operations.
                </p>
                <div class="flex items-center space-x-2 text-sm text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                    <span>Updated regularly with new testimonials</span>
                </div>
            </div>
        </div>
    </div>
</section>