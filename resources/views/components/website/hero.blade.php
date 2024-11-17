<!-- Hero Section with Gradient Background -->
<section id="home" class="pt-20 min-h-screen flex items-center gradient-bg relative overflow-hidden">
    <div class="container mx-auto px-0 flex flex-col md:flex-row items-center relative z-10">
        <div class="md:w-1/2 md:pl-12 z-10">
            <!-- "Trucking 360" text size increased on mobile only -->
            <h1 class="text-5xl font-bold text-white mb-4 md:text-4xl">{{ $settings->website_name }}</h1>
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
    <!-- Added animated background particles -->
    <div class="particles" aria-hidden="true"></div>
</section>

<!-- CSS for the gradient background -->
<style>
.gradient-bg {
    background: repeating-linear-gradient(to right, #2e368f, #e93232);
    /* background-size: 400% 400%; */
    /* animation: gradientBG 15s ease infinite; */
}

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
    filter: drop-shadow(0 10px 10px rgba(0, 0, 0, 0.3));
}

@media (max-width: 767px) {
    .header-image {
        display: none;
    }

    #home .container > div {
        text-align: center;
    }

    h3 {
        font-size: 2.75rem;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    .header-image {
        display: none;
    }

    #home .container > div {
        text-align: center;
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

.particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.particles::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle, #ffffff 1px, transparent 1px);
    background-size: 50px 50px;
    opacity: 0.1;
    animation: particlesAnimation 20s linear infinite;
}

@keyframes gradientBG {
    /* 0% { background-position: 0% 50%; } */
    50% { background-position: 100% 50%; }
    /* 100% { background-position: 0% 50%; } */
}

@keyframes particlesAnimation {
    0% { transform: translateY(0); }
    100% { transform: translateY(-100%); }
}

.animate-fade-in {
    animation: fadeIn 1s ease-out;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

.overflow-hidden {
    overflow: hidden;
}






</style>
