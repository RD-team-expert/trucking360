
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
      <div class="container mx-auto px-6">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <div>
                  <h3 class="text-xl font-bold mb-4">Trucking 360</h3>
                  <p class="mb-4">Revolutionizing logistics with innovative solutions.</p>
                  <div class="flex space-x-4">
                      <a href="#"   class="text-2xl hover:text-secondary transition-colors duration-300"><i class="fab fa-linkedin"></i></a>
                      <a href="#" class="text-2xl hover:text-secondary transition-colors duration-300"><i class="fab fa-facebook"></i></a>
                  </div>
              </div>
              <div>
                  <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                  <ul class="space-y-2">
                      <li><a href="#home" class="hover:text-secondary transition-colors duration-300">Home</a></li>
                      <li><a href="#services" class="hover:text-secondary transition-colors duration-300">Services</a></li>
                      <li><a href="#about" class="hover:text-secondary transition-colors duration-300">About</a></li>
                      <li><a href="#faq" class="hover:text-secondary transition-colors duration-300">FAQ</a></li>
                      <li><a href="#contact" class="hover:text-secondary transition-colors duration-300">Contact</a></li>
                  </ul>
              </div>
              <div>
                  <h3 class="text-xl font-bold mb-4">Contact Info</h3>
                  <p class="mb-2"><i class="fas fa-map-marker-alt mr-2 text-secondary"></i> {{{$settings->address}}}</p>
                  <p class="mb-2"><i class="fas fa-phone mr-2 text-secondary"></i> {{{$settings->phone}}}</p>
                  <p><i class="fas fa-envelope mr-2 text-secondary"></i> {{{$settings->email}}}</p>
              </div>
          </div>
          <div class="border-t border-gray-700 mt-8 pt-8 text-center">
              <p>&copy; 2024 Trucking 360. All rights reserved.</p>
          </div>
      </div>
  </footer>