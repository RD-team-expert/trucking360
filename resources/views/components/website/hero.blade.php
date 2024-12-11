<!-- Hero Section with Gradient Background -->
<section id="home" class="pt-20 min-h-screen flex items-center gradient-bg relative overflow-hidden">
    <div class="container mx-auto px-0 flex flex-col md:flex-row items-center relative z-10">
        <div class="md:w-1/2 md:pl-12 z-10">
            <!-- "Trucking 360" text with animations -->
            <h1 class="text-5xl font-bold text-white mb-4 md:text-5xl" data-aos="fade-down">{{ $settings->website_name }}</h1>
            <h4 class="text-2xl font-bold text-white mb-4 md:text-4xl" data-aos="fade-up" data-aos-delay="200">Your Partner
                to Fantastic Plus</h4>
            <br>
            <div id="typed-strings" class="hidden md:block">
                <p>Best-in-class dispatch service</p>
                <p>Available 24/7 for your drivers</p>
                <p>High-quality communication</p>
                <p>Scorecard analysis and tailored action plans to achieve and maintain Fantastic Plus scores</p>
                <p>Customized reports</p>
                <p>Daily disputes</p>
            </div>
            <span id="typed" class="text-lg md:text-3xl text-white" data-aos="fade-in" data-aos-delay="400"></span>
        </div>

        <!-- Image container with responsive sizing and positioning -->
        <div class="header-container" data-aos="fade-left" data-aos-delay="600">
            <img src="{{ asset('website/img/header.png') }}" alt="Truck Image" class="header-image">
        </div>
    </div>

    <!-- Animated background particles -->
    <div class="particles" aria-hidden="true"></div>
</section>

<!-- CSS for the gradient background -->
<style>
    .gradient-bg {
        background: repeating-linear-gradient(to right, #2e368f, #e93232);
        /* background-size: 400% 400%; */
        /* animation: gradientBG 15s ease infinite; */
    }

    #home {
        min-height: 100vh;
        position: relative;
        overflow: hidden;
    }

    #typed {
        display: block;
        height: 3rem;
        /* ارتفاع ثابت للنص المتحرك */
        white-space: pre-wrap;
        /* يمنع انكسار النص */
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
        height: 10rem;
        filter: drop-shadow(0 10px 10px rgba(0, 0, 0, 0.3));
    }

    @media (max-width: 1024px) and (min-height: 1366px) {
        #home .container>div {
            text-align: center;
        }

        h3 {
            font-size: 2.75rem;
        }

        .header-image {
            display: none;
        }
    }

    @media (max-width: 767px) {
        .header-image {
            display: none;
        }

        #home .container>div {
            text-align: center;
        }

        h3 {
            font-size: 2.75rem;
        }
    }

  /* Existing CSS ... */

@media (min-width: 768px) and (max-width: 1024px) {
    .header-image {
        display: none;
        /* Hide the image on tablet screens */
    }

    #home .container {
        display: flex;
        /* Use flexbox to center content */
        flex-direction: column;
        /* Stack elements vertically */
        justify-content: center;
        /* Center vertically */
        align-items: center;
        /* Center horizontally */
        text-align: center;
        /* Center-align the text */
        height: 100%;
        /* Ensure the container spans full height */
        white-space: normal;
        /* Prevent text breaking */
        padding: 0 20px; /* Optional: Add horizontal padding for better spacing */
    }

    /* Make the text container wider */
    #home .container > div {
        width: 80%; /* Adjust this percentage as needed */
        max-width: 800px; /* Optional: Set a maximum width for very large tablets */
    }

    h1 {
        font-size: 2.5rem; /* Slightly smaller for tablet */
        line-height: 1.3;
        margin-bottom: 1.5rem;
    }

    h4 {
        font-size: 2rem; /* Adjusted from 2xl/4xl to fit better on tablet */
        line-height: 1.3;
        margin-bottom: 1.5rem;
    }

    #typed {
        font-size: 1.5rem; /* Slightly smaller typed text for tablet */
        margin-top: 1rem;
    }

    /* If h3 is not used in your HTML, you can remove or ignore these styles */
    h3 {
        font-size: 1.8rem;
    }
}


    @media (min-width: 1024px) {
        .header-image {
            height: 42.8rem;
            /* bottom: 2rem; */
        }

        #home .container>div {
            text-align: center;
        }
    }

    @media (min-width: 1920px) {
        .header-image {
            height: 56rem;
            /* bottom: 80px; */
            top: -27rem;
            right: -185px;
            width: 180rem;
        }

        h3 {
            font-size: 2.75rem;
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
        50% {
            background-position: 100% 50%;
        }
    }

    @keyframes particlesAnimation {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-100%);
        }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out;
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .overflow-hidden {
        overflow: hidden;
    }
    
</style>

<script>
    // Typed.js initialization
    document.addEventListener('DOMContentLoaded', function() {
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 80,
            backSpeed: 45,
            loop: true,
            showCursor: false,
        });
    });
</script>
