<section class="max-w-7xl mx-auto px-6 py-16 md:py-24 lg:px-8 bg-gray-100">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <!-- Left Column - Text Content -->
        <div class="space-y-8 md:pr-8" data-aos="fade-right" data-aos-duration="800">
            {{-- <h2 class="text-4xl md:text-5xl font-bold text-primary leading-tight" data-aos="fade-up"
                data-aos-delay="200" data-aos-duration="500">
                Success Story
            </h2> --}}

            <blockquote class="text-xl md:text-2xl text-gray-600 leading-relaxed" data-aos="fade-up"
                data-aos-delay="400" data-aos-duration="500">
                <span class="text-primary">Hear directly from our partners and their drivers
                </span>
            </blockquote>

            <div class="space-y-2 border-l-4 border-primary pl-6" data-aos="fade-up" data-aos-delay="600"
                data-aos-duration="500">
                <div class="flex flex-col md:flex-row md:items-baseline md:gap-2">
                    {{-- <span class="font-semibold text-primary text-lg">Kevin,</span> --}}
                    <span class="text-gray-600">
                        Go beyond the numbers and listen to real stories from the people who experience our services
                        firsthand. Our partners and their drivers share their thoughts, experiences, and the impact our
                        services have had on their business and daily operations.</span>
                </div>
                {{-- <p class="text-gray-600">Spartanburg, SC</p>
                <p class="text-gray-600/90">Proud partner since March, 2020</p> --}}
            </div>
        </div>

        <!-- Right Column - Video -->
        <div class="relative aspect-video bg-black rounded-xl overflow-hidden shadow-xl" data-aos="fade-left"
            data-aos-duration="800" data-aos-delay="200">
            <video class="w-full h-full object-cover" controls data-aos="zoom-in" data-aos-delay="1000"
                data-aos-duration="500">
                <source src="{{ asset('website/img/t360-home.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>