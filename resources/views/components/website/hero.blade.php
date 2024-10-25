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
        <div class="header-container">
          <img src="{{ asset('website/img/header.png') }}" alt="Truck Image" class="header-image">
      </div>
      
    </div>
</section>

<!-- CSS for the gradient background -->
<style>
.header-container {
    width: 50%; /* md:w-1/2 */
    display: flex; /* flex */
    justify-content: flex-end; /* justify-end */
    position: relative; /* relative */
}

.header-image {
    position: absolute; /* absolute */
    bottom: -345px; /* Moves the image slightly below the section */
    right: -40px; /* Moves the image slightly off the right side */
    width: auto; /* w-auto */
    height: 12rem; /* h-48 */
}

@media (max-width: 767px) {
    /* Hide the image on screens smaller than 768px (mobile devices) */
    .header-image {
        display: none;
    }
}

@media (min-width: 768px) {
    .header-image {
        height: 16rem; /* md:h-64 */
    }
}

@media (min-width: 1024px) {
    .header-image {
        height: 44rem; /* lg:h-100 */
    }
}

  .gradient-bg {
    background: repeating-linear-gradient(to right, #2e368f, #e93232);
  }

  /* Ensure the section can handle the overflowed image */
  .overflow-hidden {
    overflow: hidden;
  }


</style>
