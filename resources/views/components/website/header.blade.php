<!-- Header -->
<header id="header" class="fixed w-full z-50 transition-all duration-300 bg-white shadow-md">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="{{url('/')}}" id="logo" class="text-2xl font-bold text-primary">
                <img src="{{ asset('website/img/logo22.png') }}" alt="Trucking 360 Logo" class="h-8">
            </a>
            <!-- Mobile Menu Toggle Button -->
            <div class="block md:hidden">
                <button id="menu-toggle" class="text-gray-600 hover:text-secondary focus:outline-none">
                    <!-- Menu Icon -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
           @if (Request::routeIs('embedbooking') || Request::routeIs('services.show') )
                <!-- Desktop Navigation Menu -->
            <nav id="menu" class="hidden md:block">
                <ul class="flex flex-row items-center space-x-6">
                  
                    <!-- "Book a Meeting" Button -->
                    <li>
                        <a href="{{ url('/bookings/create') }}" class="block px-4 py-2 text-center text-white bg-primary border border-primary hover:bg-white hover:text-secondary rounded transition-colors duration-300">
                            Book a Meeting
                        </a>
                    </li>
                    <a href="{{ route('comingsoon') }}" class="block px-4 py-2 text-center text-primary border border-primary hover:bg-primary hover:text-secondary rounded transition-colors duration-300">
                        Dashboard
                    </a>
                    
                </ul>
            </nav>
           @else
                <!-- Desktop Navigation Menu -->
            <nav id="menu" class="hidden md:block">
                <ul class="flex flex-row items-center space-x-6">
                    <li><a href="#home" class="block px-4 py-2 text-center text-gray-600 hover:text-secondary transition-colors duration-300">Home</a></li>
                    <li><a href="#services" class="block px-4 py-2 text-center text-gray-600 hover:text-secondary transition-colors duration-300">Services</a></li>
                    <li><a href="#about" class="block px-4 py-2 text-center text-gray-600 hover:text-secondary transition-colors duration-300">About</a></li>
                    <li><a href="#faq" class="block px-4 py-2 text-center text-gray-600 hover:text-secondary transition-colors duration-300">FAQ</a></li>
                    <li><a href="#contact" class="block px-4 py-2 text-center text-gray-600 hover:text-secondary transition-colors duration-300">Contact</a></li>
                    <!-- "Book a Meeting" Button -->
                    <li>
                        <a href="{{ url('/bookings/create') }}" class="block px-4 py-2 text-center text-white bg-primary border border-primary hover:bg-white hover:text-secondary rounded transition-colors duration-300">
                            Book a Meeting
                        </a>
                    </li>
                    <a href="{{ route('comingsoon') }}" class="block px-4 py-2 text-center text-primary border border-primary hover:bg-primary hover:text-secondary rounded transition-colors duration-300">
                        Dashboard
                    </a>
                    
                </ul>
            </nav>
           @endif
           
        </div>
    </div>
</header>
<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="fixed inset-0 h-full bg-gray-900 bg-opacity-50 z-40 hidden">
    <!-- Card Container Covering Full Width -->
    <div class="bg-white w-full h-full relative">
        <!-- Close Button -->
        <button id="mobile-menu-close" class="absolute top-4 right-4 text-gray-600 hover:text-secondary focus:outline-none">
            <!-- Close Icon -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <!-- Navigation Menu -->
        <nav class="mt-16 px-4">
            <ul class="flex flex-col items-center space-y-6 text-center">
                <li><a href="#home" class="text-gray-800 text-2xl font-semibold hover:text-secondary transition-colors duration-300">Home</a></li>
                <li><a href="#services" class="text-gray-800 text-2xl font-semibold hover:text-secondary transition-colors duration-300">Services</a></li>
                <li><a href="#about" class="text-gray-800 text-2xl font-semibold hover:text-secondary transition-colors duration-300">About</a></li>
                <li><a href="#faq" class="text-gray-800 text-2xl font-semibold hover:text-secondary transition-colors duration-300">FAQ</a></li>
                <li><a href="#contact" class="text-gray-800 text-2xl font-semibold hover:text-secondary transition-colors duration-300">Contact</a></li>
                <li><a href="{{url('bookings/create')}}" class="text-gray-800 text-2xl font-semibold hover:text-secondary transition-colors duration-300">Book A Meeting</a></li>
                <li><a href="{{ route('comingsoon') }}" class="text-gray-800 text-2xl font-semibold hover:text-secondary transition-colors duration-300">Dashboard</a></li>

                <!-- "Book a Meeting" Button (Optional) -->
                <li>
                    {{-- <a href="#book-meeting" class="text-white text-2xl bg-primary hover:bg-secondary rounded px-6 py-2 transition-colors duration-300">
                        Book a Meeting
                    </a> --}}
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Script to Toggle Mobile Menu -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    menuToggle.addEventListener('click', () => {
        mobileMenuOverlay.classList.toggle('hidden');
        document.body.classList.toggle('overflow-hidden');
    });

    mobileMenuClose.addEventListener('click', () => {
        mobileMenuOverlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('#mobile-menu-overlay a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenuOverlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    });

    
</script>

