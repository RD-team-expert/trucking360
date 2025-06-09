<!-- Header -->
<header id="header" class="fixed w-full z-50 transition-all duration-300 bg-white shadow-md">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ url('/') }}" id="logo" class="text-2xl font-bold text-primary">
                <img src="{{ asset('website/img/logo22.png') }}" alt="Trucking 360 Logo" class="h-8">
            </a>

            <!-- Mobile Menu Toggle Button (Visible on Mobile & Tablet Only) -->
            <div class="block lg:hidden">
                <button id="menu-toggle" class="text-gray-600 hover:text-secondary focus:outline-none">
                    <!-- Menu Icon -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation Menu (Hidden on Mobile) -->
            <nav id="menu" class="hidden lg:block">
                <ul class="flex flex-row items-center space-x-6">
                    <li><a href="{{ route('whyt360') }}" class="block px-4 py-2 text-center text-primary hover:text-secondary transition-colors duration-300 font-bold">Why Trucking <span style="color: #e93232">360</span></a></li>
                    {{-- <li><a href="{{ route('aboutus') }}" class="block px-4 py-2 text-center text-primary hover:text-secondary transition-colors duration-300 font-bold">About</a></li> --}}
                    <li><a href="{{ route('pricing') }}" class="block px-4 py-2 text-center text-primary hover:text-secondary transition-colors duration-300 font-bold">Services & Pricing</a></li>
                    <li><a href="{{ route('contact') }}" class="block px-4 py-2 text-center text-primary hover:text-secondary transition-colors duration-300 font-bold">Contact</a></li>
                    <!-- Resources Dropdown -->
                    <li class="relative">
                        <button id="resourcesDropdownButton" class="block px-4 py-2 text-center text-primary hover:text-secondary transition-colors duration-300 font-bold focus:outline-none">
                            Resources
                            <svg class="w-4 h-4 ml-1 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul id="resourcesDropdownMenu" class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                            <li><a href="{{ route('comingsoon') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Newsletter</a></li>
                            <li><a href="{{ route('faqs') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">FAQ's</a></li>
                            <li><a href="{{ route('comingsoon') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Free Resources</a></li>
                        </ul>
                    </li>
                    <!-- "Book a Meeting" Button -->
                    <li>
                        <a href="{{ url('/bookings/create') }}" class="block px-4 py-2 text-center text-white bg-primary border border-primary hover:bg-white hover:text-secondary rounded transition-colors duration-300">
                            Book a Meeting
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('comingsoon') }}" class="block px-4 py-2 text-center text-white bg-secondary border border-secondary hover:bg-white hover:text-secondary rounded transition-colors duration-300">
                            Dashboard360
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- Mobile & Tablet Menu Overlay (Hidden on Desktop) -->
<div id="mobile-menu-overlay" class="fixed inset-0 h-full bg-gray-900 bg-opacity-50 z-40 hidden lg:hidden">
    <div class="bg-white w-full h-full relative">
        <!-- Close Button -->
        <button id="mobile-menu-close" class="absolute top-4 right-4 text-gray-600 hover:text-secondary focus:outline-none">
            <!-- Close Icon -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <!-- Navigation Menu for Mobile & Tablet -->
        <nav class="mt-16 px-4">
            <ul class="flex flex-col items-center space-y-6 text-center">
                <li><a href="{{ route('whyt360') }}" class="text-primary text-2xl font-semibold hover:text-secondary transition-colors duration-300">Why Trucking <span style="color: #e93232">360</span></a></li>
                {{-- <li><a href="{{ route('aboutus') }}" class="text-primary text-2xl font-semibold hover:text-secondary transition-colors duration-300">About</a></li> --}}
                <li><a href="{{ route('pricing') }}" class="text-primary text-2xl font-semibold hover:text-secondary transition-colors duration-300">Services & Pricing</a></li>
                <li><a href="{{ route('contact') }}" class="text-primary text-2xl font-semibold hover:text-secondary transition-colors duration-300">Contact</a></li>
                <!-- Resources Dropdown (Mobile & Tablet) -->
                <li class="relative">
                    <button id="mobile-resources-toggle" class="text-primary text-2xl font-semibold hover:text-secondary transition-colors duration-300 flex items-center">
                        Resources
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul id="mobile-resources-dropdown" class="hidden mt-2 space-y-2">
                        <li><a href="{{ route('comingsoon') }}" class="text-primary text-xl hover:text-secondary transition-colors duration-300">Newsletter</a></li>
                        <li><a href="{{ route('faqs') }}" class="text-primary text-xl hover:text-secondary transition-colors duration-300">FAQ's</a></li>
                        <li><a href="{{ route('comingsoon') }}" class="text-primary text-xl hover:text-secondary transition-colors duration-300">Free Resources</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('bookings/create') }}" class="text-primary text-2xl font-semibold hover:text-secondary transition-colors duration-300">Book A Meeting</a></li>
                <li><a href="{{ route('comingsoon') }}" class="text-primary text-2xl font-semibold hover:text-secondary transition-colors duration-300">Dashboard360</a></li>
            </ul>
        </nav>
    </div>
</div>

<style>
    @media (min-width: 1024px) {
    #menu-toggle {
        display: none;
    }
}
</style>
<!-- Scripts for Toggle -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileResourcesToggle = document.getElementById('mobile-resources-toggle');
    const mobileResourcesDropdown = document.getElementById('mobile-resources-dropdown');

    // Toggle mobile menu
    menuToggle.addEventListener('click', () => {
        mobileMenuOverlay.classList.toggle('hidden');
        document.body.classList.toggle('overflow-hidden');
    });

    mobileMenuClose.addEventListener('click', () => {
        mobileMenuOverlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    });

    // Close mobile menu when a link is clicked
    document.querySelectorAll('#mobile-menu-overlay a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenuOverlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    });

    // Toggle resources dropdown in mobile menu
    mobileResourcesToggle.addEventListener('click', () => {
        mobileResourcesDropdown.classList.toggle('hidden');
    });

    // Desktop resources dropdown toggle
    const dropdownButton = document.getElementById('resourcesDropdownButton');
    const dropdownMenu = document.getElementById('resourcesDropdownMenu');

    dropdownButton.addEventListener('click', function() {
        dropdownMenu.classList.toggle('hidden');
    });

    // Close the dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>
