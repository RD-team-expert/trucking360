
<section id="about" class="py-20 bg-gradient-to-b from-white bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2">
                <img src="{{asset('website/img/about.png')}}" alt="About Trucking 360" class="rounded-lg shadow-2xl w-full max-w-2xl mx-auto">
            </div>
            <div class="lg:w-1/2 space-y-6">
                <h2 class="text-4xl font-bold text-primary">
                    Who We Are
                </h2>
                <p class="text-lg text-gray-700">
                    Trucking 360 is your dedicated partner for achieving Fantastic+ results in the Amazon Freight Partner (AFP) program. Our comprehensive, 360-degree solutions are designed to support every facet of your AFP business, allowing you to focus on growth while we handle the rest.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-primary flex-shrink-0 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-gray-700"><span class="font-semibold">Global Expertise:</span> Our team brings experience from around the world, specializing in operational excellence and tailored services for AFP companies.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-primary flex-shrink-0 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-gray-700"><span class="font-semibold">Elite Dispatch Services:</span> We provide 24/7 dispatching with a focus on safety, efficiency, and performance to ensure your business runs at peak capacity.</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-primary flex-shrink-0 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-gray-700"><span class="font-semibold">Customer-Obsessed:</span> Our business model prioritizes your success, offering proven systems and processes that allow AFP owners to earn more while doing less.</span>
                    </li>
                </ul>
                <p class="text-lg font-semibold text-primary">
                    Let Trucking 360 handle the details, so you can focus on driving your business forward.
                </p>
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

        

     
    </script>