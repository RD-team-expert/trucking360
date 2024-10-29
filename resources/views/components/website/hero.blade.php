<!-- Hero Section with Gradient Background -->
<section id="home" class="pt-20 min-h-screen flex items-center gradient-bg relative overflow-hidden">
    <div class="container mx-auto px-0 flex flex-col md:flex-row items-center relative z-10">
        <div class="md:w-1/2 md:pl-12 z-10">
            <!-- "Trucking 360" text size increased on mobile only -->
            <h3 class="text-5xl font-bold text-white mb-4 md:text-4xl">{{ $settings->website_name }}</h3>
            <h4 class="text-2xl font-bold text-white mb-4 md:text-3xl">Your Partner to Fantastic Plus</h4>
            <br>
            <div id="typed-strings" class="hidden md:block">
                <p>Best in-class dispatch service</p>
                <p>24/7 available for your drivers</p>
                <p>High communication quality</p>
                <p>Scorecard analysis and action plans to secure Fantastic Plus scores</p>
                <p>Customized reports</p>
                <p>Daily disputes</p>
            </div>
            <span id="typed" class="text-lg md:text-3xl text-white"></span>
        </div>
        
        <!-- Image container with responsive sizing and positioning -->
        <div class="header-container">
          <img src="{{ asset('website/img/header.png') }}" alt="Truck Image" class="header-image">
      </div>
      
    </div>
</section>

<!-- CSS for the gradient background -->
<style>
.header-container {
    width: 50%;
    display: flex;
    justify-content: flex-end;
    position: relative;
}

.header-image {
    position: absolute;
    bottom: -345px;
    right: -40px;
    width: auto;
    height: 12rem;
}

@media (max-width: 767px) {
    .header-image {
        display: none;
    }

    /* Mobile-specific styling */
    #home .container > div {
        text-align: center; /* Center text only on mobile */
      
    }

    /* Increase font size for "Trucking 360" text on mobile */
    h3 {
        font-size: 2.75rem;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    /* Tablet-specific styling */
    .header-image {
        display: none;

    }
    #home .container > div {
        text-align: center; /* Center text only on mobile */
        
    }

    h3 {
        font-size: 2.75rem;
    }
}

@media (min-width: 1024px) {
    .header-image {
        height: 44rem;
    }
}

@media (min-width: 1920px) {
    .header-image {
        height: 64rem;
        bottom: -500px;
        right: -190px;
    }
}

.gradient-bg {
    background: repeating-linear-gradient(to right, #2e368f, #e93232);
}

.overflow-hidden {
    overflow: hidden;
}
</style>
