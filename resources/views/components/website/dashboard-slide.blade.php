{{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<section id="dashboard-slide" class="py-16 bg-gray-100">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Fully Automated – No Manual Entry by the User</h2>
            <div class="feature-highlights flex justify-center gap-6 mt-4">
                <span class="text-secondary font-medium">Updated Daily</span>
                <span class="text-secondary font-medium">-</span>
                <span class="text-secondary font-medium">Daily Scores</span>

            </div>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper dashboardSwiper relative" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="dashboard-image rounded-lg overflow-hidden">
                            <img src="{{ asset('website/img/about.jpg') }}" alt="Dashboard Analytics" class="w-full h-auto transition-transform duration-500 hover:scale-105 cursor-pointer" onclick="openImageModal(this.src)">
                        </div>
                        <div class="dashboard-content p-4">
                            <h3 class="text-2xl font-bold text-primary mb-4">Comprehensive Analytics Dashboard</h3>
                            <p class="text-gray-700 mb-6">Our automated dashboard provides real-time insights into your delivery performance metrics. Track your Fantastic+ score components with daily updates and no manual data entry required.</p>
                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-secondary flex items-center justify-center mr-4">
                                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="pl-1">Daily performance metrics updated automatically</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-secondary flex items-center justify-center mr-4">
                                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="pl-1">Visual representation of key performance indicators</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="dashboard-image rounded-lg overflow-hidden">
                            <img src="{{ asset('website/img/about.jpg') }}" alt="Performance Tracking" class="w-full h-auto transition-transform duration-500 hover:scale-105 cursor-pointer" onclick="openImageModal(this.src)">
                        </div>
                        <div class="dashboard-content p-4">
                            <h3 class="text-2xl font-bold text-primary mb-4">Driver Performance Tracking</h3>
                            <p class="text-gray-700 mb-6">Monitor individual driver metrics and identify areas for improvement. Our system automatically highlights performance trends and provides actionable insights to help maintain Fantastic+ status.</p>
                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-secondary flex items-center justify-center mr-4">
                                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="pl-1">Individual driver performance metrics</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-secondary flex items-center justify-center mr-4">
                                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="pl-1">Automated alerts for performance issues</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="dashboard-image rounded-lg overflow-hidden">
                            <img src="{{ asset('website/img/about.jpg') }}" alt="Trend Analysis" class="w-full h-auto transition-transform duration-500 hover:scale-105 cursor-pointer" onclick="openImageModal(this.src)">
                        </div>
                        <div class="dashboard-content p-4">
                            <h3 class="text-2xl font-bold text-primary mb-4">Historical Trend Analysis</h3>
                            <p class="text-gray-700 mb-6">Gain valuable insights from historical performance data. Our dashboard automatically compiles and analyzes past performance to help you make data-driven decisions for your AFP business.</p>
                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-secondary flex items-center justify-center mr-4">
                                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="pl-1">Week-over-week performance comparisons</span>
                                </li>
                                <li class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-secondary flex items-center justify-center mr-4">
                                        <svg class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="pl-1">Predictive analytics for future performance</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Custom Navigation Arrows -->
            <div class="custom-nav-prev">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="custom-nav-next">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
            
            <!-- Pagination -->
            <div class="swiper-pagination custom-pagination"></div>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
        <div class="relative max-w-4xl w-full mx-4">
            <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white hover:text-secondary focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <img id="modalImage" src="" alt="Dashboard Full View" class="max-w-full max-h-[80vh] mx-auto">
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Swiper
            const swiper = new Swiper('.dashboardSwiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                effect: 'coverflow',
                coverflowEffect: {
                    rotate: 30,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                speed: 1000,
                pagination: {
                    el: '.custom-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation: {
                    nextEl: '.custom-nav-next',
                    prevEl: '.custom-nav-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 40
                    }
                },
                on: {
                    beforeInit: function() {
                        // Add perspective to container
                        this.el.style.perspective = '1200px';
                    },
                    slideChangeTransitionStart: function() {
                        // Add animation classes to elements
                        const activeSlide = this.slides[this.activeIndex];
                        const image = activeSlide.querySelector('.dashboard-image');
                        const content = activeSlide.querySelector('.dashboard-content');
                        
                        if (image && content) {
                            image.classList.add('slide-in-left');
                            content.classList.add('slide-in-right');
                        }
                    },
                    slideChangeTransitionEnd: function() {
                        // Remove animation classes from all slides
                        this.slides.forEach(slide => {
                            const image = slide.querySelector('.dashboard-image');
                            const content = slide.querySelector('.dashboard-content');
                            
                            if (image && content) {
                                if (slide !== this.slides[this.activeIndex]) {
                                    image.classList.remove('slide-in-left');
                                    content.classList.remove('slide-in-right');
                                }
                            }
                        });
                    }
                }
            });
            
            // Add custom transition effects
            const slides = document.querySelectorAll('.swiper-slide');
            slides.forEach(slide => {
                slide.addEventListener('mouseenter', function() {
                    this.classList.add('slide-hover');
                });
                
                slide.addEventListener('mouseleave', function() {
                    this.classList.remove('slide-hover');
                });
            });
        });

        // Image Modal Functions
        function openImageModal(src) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = src;
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });
    </script>

    <style>
        /* Badge spacing and styling */
        .badge-container span:first-child {
            margin-right: 80px;
        }
        
        .badge-card {
            display: inline-block;
            background-color: var(--secondary-color, #e53e3e);
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .badge-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 50%);
            pointer-events: none;
        }
        
        .badge-card:hover {
            transform: translateY(-2px);
        }
        
        /* Swiper Custom Styles */
        .swiper {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-bottom: 60px;
            overflow: hidden;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            padding: 30px;
            transition: all 0.5s ease;
            opacity: 0.4;
            transform: scale(0.85);
        }

        .swiper-slide-active {
            opacity: 1;
            transform: scale(1);
        }

        .swiper-slide-prev, 
        .swiper-slide-next {
            opacity: 0.7;
            transform: scale(0.9);
        }

        /* Custom Animation Classes */
        .slide-in-left {
            animation: slideInLeft 0.8s ease-out forwards;
        }

        .slide-in-right {
            animation: slideInRight 0.8s ease-out forwards;
        }

        /* Removed the shadow from slide-hover class */
        .slide-hover {
            transform: translateY(-5px);
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Custom Navigation Arrows */
        .custom-nav-next,
        .custom-nav-prev {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .custom-nav-next {
            right: 25px;
        }

        .custom-nav-prev {
            left: 25px;
        }

        .custom-nav-next svg,
        .custom-nav-prev svg {
            width: 20px;
            height: 20px;
            color: #3490dc;
            transition: all 0.3s ease;
        }

        .custom-nav-next:hover,
        .custom-nav-prev:hover {
            background-color: #3490dc;
            transform: translateY(-50%) scale(1.1);
        }

        .custom-nav-next:hover svg,
        .custom-nav-prev:hover svg {
            color: white;
        }

        /* Custom Pagination */
        .custom-pagination {
            bottom: 20px !important;
        }

        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            margin: 0 6px !important;
            opacity: 0.7;
            transition: all 0.3s ease;
            background-color: #ccc;
        }

        .swiper-pagination-bullet-active {
            background-color: #3490dc !important;
            opacity: 1;
            width: 12px;
            height: 12px;
        }

        /* Dashboard content styles */
        .dashboard-image, 
        .dashboard-content {
            transition: all 0.5s ease;
        }

        .dashboard-image img {
            transition: transform 0.5s ease;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .swiper-slide {
                padding: 15px;
            }
            
            .custom-nav-next,
            .custom-nav-prev {
                width: 35px;
                height: 35px;
            }
            
            .custom-nav-next svg,
            .custom-nav-prev svg {
                width: 18px;
                height: 18px;
            }
            
            .dashboard-content {
                padding: 15px 0;
            }
        }

        @media (max-width: 640px) {
            .swiper {
                padding-bottom: 50px;
            }
            
            .custom-nav-next,
            .custom-nav-prev {
                width: 30px;
                height: 30px;
            }
            
            .custom-nav-next svg,
            .custom-nav-prev svg {
                width: 16px;
                height: 16px;
            }
            
            .custom-nav-next {
                right: 15px;
            }
            
            .custom-nav-prev {
                left: 15px;
            }
        }
    </style>
</section>