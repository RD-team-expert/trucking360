<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Services Page</title>
    <!-- Include Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Include Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        /* Ensure all service boxes have equal height */
        .service-box {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        /* Optional: If you have images and want them to be consistent */
        .service-box img {
            height: 200px; /* Adjust as needed */
            object-fit: cover;
            width: 100%;
            border-radius: 0.5rem; /* Match the rounding of the box */
        }
        /* Modal Styles */
        #service-modal {
            display: none; /* Hidden by default */
        }
        #service-modal.active {
            display: flex; /* Show when active */
        }
    </style>
</head>
<body>
    <!-- Your other content -->

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-primary mb-12">Our Services</h2>
            <!-- Services Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach($services as $service)
                    <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 service-box cursor-pointer" data-service="{{ $service->id }}">
                        <i class="{{ $service->icon }} text-4xl text-secondary mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2 text-primary">{{ $service->title }}</h3>
                        <p class="text-gray-600 flex-grow">{{ $service->description }}</p>
                        @if($service->button_url)
                            <a href="{{ $service->button_url }}" class="mt-4 inline-block text-secondary hover:underline">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        @else
                            <a href="{{ route('services.show', $service->slug) }}" class="mt-4 inline-block text-secondary hover:underline">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal Structure -->
    <div id="service-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 w-11/12 md:w-1/2 lg:w-1/3 relative">
            <button id="modal-close" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <i class="fas fa-times fa-lg"></i>
            </button>
            <div id="modal-content">
                <!-- Service details will be injected here -->
            </div>
        </div>
    </div>

    <!-- Your other content -->

    <!-- Include your main JavaScript file -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- JavaScript for Interactive Elements -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const serviceBoxes = document.querySelectorAll('.service-box');
            const modal = document.getElementById('service-modal');
            const modalContent = document.getElementById('modal-content');
            const modalClose = document.getElementById('modal-close');

            serviceBoxes.forEach(function(box) {
                box.addEventListener('click', function() {
                    const serviceId = this.getAttribute('data-service');

                    // Fetch service details via AJAX (assuming you have an API endpoint)
                    fetch(`/api/services/${serviceId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Populate modal content
                            modalContent.innerHTML = `
                                <h3 class="text-2xl font-bold mb-4 text-primary">${data.title}</h3>
                                <p class="text-gray-600 mb-4">${data.description}</p>
                                <!-- Include more details as needed -->
                            `;
                            // Show modal
                            modal.classList.remove('hidden');
                            modal.classList.add('active');
                        })
                        .catch(error => {
                            console.error('Error fetching service details:', error);
                        });
                });
            });

            // Close modal when the close button is clicked
            modalClose.addEventListener('click', function() {
                modal.classList.add('hidden');
                modal.classList.remove('active');
            });

            // Close modal when clicking outside the modal content
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
