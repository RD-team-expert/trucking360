<!-- Hero Section with Gradient Background -->
<section id="home" class="pt-20 min-h-screen flex items-center gradient-bg relative overflow-hidden">
    <div class="container mx-auto px-0 flex flex-col md:flex-row items-center relative z-10">
        <div class="md:w-1/2 md:pl-12 z-10">
            <!-- Larger "Trucking 360" text -->
            <h3 class="text-3xl md:text-5xl font-bold text-white mb-4">{{ $settings->website_name }}</h3>
            <h4 class="text-3xl md:text-5xl font-bold text-white mb-4">Your Partner to Fantastic Plus</h4>
            <br>
            <div id="typed-strings">
                <p>Best in-class dispatch service</p>
                <p>24/7 available for your drivers</p>
                <p>High communication quality</p>
                <p>Scorecard analysis and action plans to secure Fantastic Plus scores</p>
                <p>Customized reports</p>
                <p>Daily disputes</p>
            </div>
            <span id="typed" class="text-lg md:text-3xl text-white"></span>
        </div>
        
        <!-- Image container with smaller image size and overflow -->
        <div class="md:w-1/2 flex justify-end relative">
            <img src="{{ asset('website/img/header.png') }}" alt="Truck Image" class="absolute bottom-0 right-0 w-auto h-48 md:h-64 lg:h-100">
        </div>
    </div>
</section>

<!-- CSS for the gradient background -->
<style>
  .gradient-bg {
    background: repeating-linear-gradient(to right, #2e368f, #e93232);
  }

  /* Ensure the section can handle the overflowed image */
  .overflow-hidden {
    overflow: hidden;
  }

  /* Adjust the image styling for overflow */
  img.absolute {
    position: absolute;
    bottom: -300px;  /* Moves the image slightly below the section */
    right: -40px;   /* Moves the image slightly off the right side */
  }
</style>
