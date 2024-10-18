
    <!-- About Us Section -->
    <section id="about" class="py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="{{asset('website/img/about.png')}}" alt="About Trucking 360" class="rounded-lg shadow-lg" style="max-width: 600px">
                </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold text-primary mb-6">About Us</h2>
                    <p class="text-gray-600 mb-6">
                        Trucking 360 is a leading logistics company with over 20 years of experience in providing innovative transportation solutions. Our commitment to excellence and customer satisfaction sets us apart in the industry.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <i class="fas fa-users text-2xl text-secondary mr-4"></i>
                            <span class="text-gray-700">Expert Team</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-truck text-2xl text-secondary mr-4"></i>
                            <span class="text-gray-700">Modern Fleet</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-globe text-2xl text-secondary mr-4"></i>
                            <span class="text-gray-700">Global Reach</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-chart-line text-2xl text-secondary mr-4"></i>
                            <span class="text-gray-700">Innovative Solutions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 10) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });

        // Typed.js initialization
        document.addEventListener('DOMContentLoaded', function() {
            var typed = new Typed('#typed', {
                stringsElement: '#typed-strings',
                typeSpeed: 80,
                backSpeed: 45,
                loop: true,
                showCursor: false
            });
        });

        // Accordion functionality
        function toggleAccordion(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('i');
            
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }

        // Contact form submission
        // document.getElementById('contact-form').addEventListener('submit', (e) => {
        //     e.preventDefault();
        //     // Here you would typically send the form data to a server
        //     alert('Thank you for your message. We will get back to you soon!');
        //     e.target.reset();
        // });
    </script>