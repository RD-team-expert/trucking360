<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Company Description -->
            <div>
                <h3 class="text-xl md:text-2xl font-bold mb-4">Trucking 360</h3>
                <p class="mb-4 text-sm md:text-base">{{ $settings->description }}</p>
                <div class="flex space-x-4">
                    <a href="{{$settings->linkedin_link}}" class="text-2xl hover:text-secondary transition-colors duration-300"><i class="fab fa-linkedin"></i></a>
                    <a href="{{$settings->facebook_link}}" class="text-2xl hover:text-secondary transition-colors duration-300"><i class="fab fa-facebook"></i></a>
                </div>
            </div>

                <!-- Quick Links -->
                @if (Request::routeIs('embedbooking') || Request::routeIs('services.show') )
                <div>
                    <h3 class="text-xl md:text-2xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{url('/')}}" class="hover:text-secondary transition-colors duration-300">Home</a></li>
                        <li><a href="{{ route('whyt360') }}" class="hover:text-secondary transition-colors duration-300">Why Trucking 360</a></li>
                        <li><a href="{{ route('aboutus') }}" class="hover:text-secondary transition-colors duration-300">About</a></li>
                        <li><a href="{{ route('faqs') }}" class="hover:text-secondary transition-colors duration-300">FAQs</a></li>
                        <li><a href="{{ route('pricing') }}" class="hover:text-secondary transition-colors duration-300">Pricing</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-secondary transition-colors duration-300">Contact us</a></li>
  
                    </ul>
                </div>
                @else
                <div>
                    <h3 class="text-xl md:text-2xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm md:text-base">
                      <li><a href="{{url('/')}}" class="hover:text-secondary transition-colors duration-300">Home</a></li>
                      <li><a href="{{ route('whyt360') }}" class="hover:text-secondary transition-colors duration-300">Why Trucking 360</a></li>
                      <li><a href="{{ route('aboutus') }}" class="hover:text-secondary transition-colors duration-300">About</a></li>
                      <li><a href="{{ route('faqs') }}" class="hover:text-secondary transition-colors duration-300">FAQs</a></li>
                      <li><a href="{{ route('pricing') }}" class="hover:text-secondary transition-colors duration-300">Pricing</a></li>
                      <li><a href="{{ route('contact') }}" class="hover:text-secondary transition-colors duration-300">Contact us</a></li>
  
                    </ul>
                </div>
                @endif

            <!-- Contact Info -->
            <div>
                <h3 class="text-xl md:text-2xl font-bold mb-4">Contact Info</h3>
                
                <!-- Address -->
                <p class="mb-2 text-sm md:text-base flex items-center">
                    <i class="fas fa-map-marker-alt mr-2 text-secondary"></i> 
                    <a href="https://www.google.com/maps/search/?q={{ urlencode($settings->address) }}" target="_blank" class="text-white hover:text-secondary transition-colors duration-300">
                        {{ $settings->address }}
                    </a>
                </p>
            
                <!-- Phone -->
                <p class="mb-2 text-sm md:text-base flex items-center">
                    <i class="fas fa-phone mr-2 text-secondary"></i> 
                    <a href="tel:{{ $settings->phone }}" class="text-white hover:text-secondary transition-colors duration-300">
                        {{ $settings->phone }}
                    </a>
                </p>
            
                <!-- Email -->
                <p class="text-sm md:text-base flex items-center">
                    <i class="fas fa-envelope mr-2 text-secondary"></i> 
                    <a href="mailto:{{ $settings->email }}" class="text-white hover:text-secondary transition-colors duration-300">
                        {{ $settings->email }}
                    </a>
                </p>
            </div>
        
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm md:text-base">
            <p>&copy; 2024 Trucking 360. All rights reserved.</p>
        </div>
    </div>
</footer>
