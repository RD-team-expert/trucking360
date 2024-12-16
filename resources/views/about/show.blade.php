@extends('layouts.website.app')

@section('title', 'About Us - Trucking 360')

@section('content')

    <div class="bg-gray-100 font-sans" style="overflow: hidden;">

        <main class="container mx-auto px-4 py-20">
            <section class="container mx-auto px-4 py-16 md:py-24">
                <div class="flex flex-col md:flex-row items-center justify-between gap-8" data-aos="fade-up"
                    data-aos-duration="800">
                    <div class="max-w-2xl" data-aos="fade-right" data-aos-duration="1000">
                        <h1 class="text-4xl md:text-5xl font-bold text-primary mb-4">
                            Our <span class="text-4xl md:text-5xl font-bold text-secondary mb-4">Mission</span>
                        </h1>
                        <p class="text-lg md:text-xl text-primary font-semibold leading-relaxed">
                            To empower AFPs by delivering top-tier management solutions tailored to enhance operational
                            efficiency, elevate excellence performance metrics, and secure high evaluations from Amazon. We
                            are dedicated to fostering a culture of continuous improvement, ensuring mutual growth, success,
                            and long-term partnerships that drive excellence across every aspect of your operations.

                        </p>
                    </div>
                    <div class="mission-image">
                        <img src="{{ asset('website/img/3.1.gif') }}" alt="Mission Image" />
                    </div>

                </div>
            </section>

            <style>
                .mission-image {
                    max-width: 25%;
                    /* Adjust size relative to the container */
                    margin-left: auto;

                    /* Push image to the right */
                }

                .mission-image img {
                    width: 100%;
                    /* Fully responsive */
                    height: 20%;
                    /* Maintain aspect ratio */
                    object-fit: contain;
                    /* Ensure proper scaling without cropping */
                }

                @media (max-width: 300px) {
                    body {
                        margin: 0;
                        padding: 0;
                        overflow-x: hidden;
                        /* Prevent horizontal overflow */
                    }
                }

                /* Responsive adjustments for mobile */
                @media (max-width: 768px) {
                    .mission-image {
                        max-width: 100%;
                        /* Full width for smaller screens */
                        margin-left: 0;
                        /* Center the image */
                        text-align: center;
                    }

                    .mission-image img {
                        width: 80%;
                        /* Slightly smaller than the full width for padding */
                        margin: 0 auto;
                        /* Center the image */
                    }
                }

                @media (max-width: 767px) {

                    body {
                        margin: 0;
                        padding: 0;
                        overflow-x: hidden;
                        /* Prevent horizontal overflow */
                    }

                    img,
                    .mission-image,
                    .accordion-content {
                        max-width: 100%;
                        /* Ensure images and elements don't overflow */
                        width: 100%;
                        /* Adjust the width to fit the container */
                    }

                    /*
                        .container {
                            width: 100%;
                            /* Ensure the container doesn't exceed the viewport width */
                    max-width: 100%;
                }

                */ .accordion-header {
                    word-wrap: break-word;
                    /* Prevent long text from causing overflow */
                }
            </style>

            <!-- Leadership Section -->
            <section class="container mx-auto px-4 py-16 bg-white">
                <div class="flex flex-col md:flex-row gap-12 items-start" data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full md:w-1/2 image" data-aos="fade-right" data-aos-duration="1300">
                        <img src="{{ asset('website/img/nickpic.jpg') }}" alt="Leadership placeholder"
                            class="rounded-lg shadow-lg w-full" />
                    </div>
                    <div class="w-full md:w-2/3" data-aos="fade-left" data-aos-duration="1500">
                        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">
                            Nicholas Krave
                        </h2>
                        <h3 class="text-2xl font-bold text-primary mb-6">
                            President, Trucking <span class="text-secondary">360</span>
                        </h3>
                        <div class="space-y-6 text-primary">
                            <p class="leading-relaxed font-semibold">
                                Hi, my name is Nick, and I’m proud to serve as the President of Trucking <span
                                    class="text-secondary">360</span>. I am an
                                Ohio native with my degree from Ferris State University in Big Rapids, Michigan. After
                                college, I developed a deep passion for logistics and everything it takes to keep things
                                moving smoothly. Throughout my career, I’ve been dedicated to creating efficient,
                                customer-centered solutions that prioritize flexibility and operational excellence.
                            </p>
                            <p class="leading-relaxed font-semibold">
                                Beyond logistics, I have a big love for dogs and believe that genuine connections and clear
                                communication make all the difference. Not only with dogs but, in business too! That’s why
                                you can always count on me being just one call away whenever you need support.
                            </p>
                            <p class="leading-relaxed font-semibold">
                                With Trucking <span class="text-secondary">360</span>, I’ve worked hard to build a team that
                                shares my obsession with customer
                                success and excellence. You can count on my team and I to be focused on doing whatever it
                                takes to ensure you achieve and maintain a Fantastic Plus rating. Together, we’re here to be
                                more than just a service provider—we’re your partner, fully committed to helping your
                                business thrive.
                            </p>
                            <p class="leading-relaxed font-semibold">
                                We proudly align our leadership principles with those of Amazon to best serve our customers.
                                These principles guide every action we take, from putting our customers first and fostering
                                engagement within their teams, to delivering with speed, precision, and integrity. Our
                                commitment ensures we consistently provide value and exceptional results to our customers.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <style>
                .image {
                    margin-top: 1%;
                }
            </style>

<!-- FAQ Section -->
<section id="faq" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-primary mb-12" data-aos="fade-up">Our Core Principles</h2>
        <div class="max-w-3xl mx-auto space-y-4" id="accordion">
            <!-- Customer Obsession -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="0">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Customer Obsession</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We put our customers at the center of everything we do, making their needs and goals our top priority. By maintaining open communication, understanding their unique challenges, and tailoring our services to address them, we strive to exceed expectations and deliver exceptional service. Every action we take is driven by a commitment to helping our customers succeed in their operations.
                    </p>
                </div>
            </div>
            
            <!-- Employee Obsession -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Employee Obsession</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We are dedicated to engaging and empowering our customers’ employees, recognizing that they are the backbone of success in every operation. Through tailored safety campaigns, we prioritize the well-being of drivers and staff, equipping them with the knowledge and tools to maintain high safety standards. Our engagement initiatives are designed to boost morale, encourage professional growth, and foster a sense of belonging within the team. By creating a productive and supportive work environment, we help drive success, ensuring employees feel valued, motivated, and aligned with their company’s goals.
                    </p>
                </div>
            </div>
            
            <!-- Ownership -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Ownership</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We take full ownership of our actions, holding ourselves accountable for every decision and outcome. By providing clear direction, we ensure that our strategies and solutions align with your goals and operational needs. We collaborate closely with your dedicated Account Success Managers (ASM) to maintain seamless communication and foster a proactive partnership. This approach allows us to address challenges swiftly, implement effective solutions, and consistently deliver results that support the growth and efficiency of your operations.
                    </p>
                </div>
            </div>
            
            <!-- Invent & Simplify -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Invent & Simplify</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We are committed to innovation and simplicity. By leveraging cutting-edge technology and fresh ideas, we streamline processes, reduce complexities, and create efficient solutions. We believe that the best ideas often come from rethinking the basics, making things easier for everyone—our team, our customers, and our partners.
                    </p>
                </div>
            </div>
            
            <!-- Learn & Be Curious -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Learn & Be Curious</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We foster a culture of curiosity and continuous learning, encouraging exploration and innovation at every level. By offering assistance with pilot programs, we help our customers test and adopt new strategies that drive growth and adaptability. We deeply value feedback and constructive criticism, viewing them as essential tools for improvement and progress, enabling us to refine our services and exceed expectations consistently.
                    </p>
                </div>
            </div>
            
            <!-- Hire & Develop the Best -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="500">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Hire & Develop the Best</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We are dedicated to hiring and developing top talent to best serve our customers, ensuring that our team is equipped with the skills, knowledge, and passion needed to deliver exceptional service. This same principle is seamlessly passed along to our customers’ businesses through customized hiring services designed to meet their specific needs. Whether it’s sourcing qualified drivers, selecting skilled dispatchers, or onboarding HR professionals, we tailor our approach to align with the unique demands of your operations. Beyond hiring, we focus on the development and retention of top talent, offering training programs, performance coaching, and continuous support to help employees excel and thrive in their roles. By investing in people, we empower businesses to achieve long-term success.
                    </p>
                </div>
            </div>
            
            <!-- Insist on the Highest Standards - Fantastic+ Status -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="600">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Insist on the Highest Standards - Fantastic+ Status</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We hold ourselves to the highest standards in every aspect of our operations, ensuring that excellence is not just a goal but a way of doing business. Striving to achieve and maintain a Fantastic+ status, we align our processes, services, and results with the rigorous expectations set by the AFP program. Every effort is directed toward delivering unmatched quality and reliability. By continuously evaluating and refining our practices, we aim not only to meet but exceed the limits that define AFP success, helping our customers achieve and sustain their Fantastic+ rating.
                    </p>
                </div>
            </div>
            
            <!-- Bias for Action -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="700">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Bias for Action</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We strive to earn trust by consistently delivering on our promises with speed and quality, understanding that action and reliability are key to building strong partnerships. Our commitment to taking action means we do what we say we will do, ensuring every effort is executed with precision, purpose, and a sense of urgency. We embrace calculated risks when they prioritize the success of your business. Whether it’s resolving issues swiftly, implementing innovative solutions, or responding to challenges, we act proactively and effectively to keep your operations running smoothly. By combining a sense of responsibility with a focus on outcomes, we help you stay ahead in the dynamic AFP world.
                    </p>
                </div>
            </div>
            
            <!-- Frugality - Value Added Partners & Cost Savings -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="800">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Frugality - Value Added Partners & Cost Savings</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We prioritize cost savings by partnering with value-driven solutions, enabling us to deliver more with less without compromising quality or service. Our per-accepted contract cost structure ensures that our customers are in good hands, only paying for what they use, which maximizes efficiency and value at every step. As a trusted partner, we are committed to providing exceptional support while ensuring cost efficiency that drives long-term success for your operations.
                    </p>
                </div>
            </div>
            
            <!-- Earn Trust -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="900">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Earn Trust</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We work diligently to build and uphold trust through honesty, transparency, and consistent value delivery. By offering thoughtful, reliable guidance and fostering meaningful, long-term relationships, we aim to create a foundation of trust that drives success for all parties involved. Your confidence in us is not just earned—it’s continuously nurtured.
                    </p>
                </div>
            </div>
            
            <!-- Dive Deep - Accident Investigation & Customer Supply Chain Analysis -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="1000">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Dive Deep - Accident Investigation & Customer Supply Chain Analysis</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We dive deep into every detail, leaving no stone unturned to ensure accuracy. We conduct thorough accident investigations including comprehensive root cause analysis and implementing actionable solutions to prevent recurrence. In addition, we analyze customer supply chains to identify inefficiencies, optimize processes, and drive continuous improvement. By leveraging data-driven insights we help our customers enhance safety, operational excellence score, and overall efficiency, ensuring their operations are robust and future-ready.
                    </p>
                </div>
            </div>
            
            <!-- Deliver Results - Whatever it Takes to be Fantastic+, Safely -->
            <div class="bg-white rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="1100">
                <button class="flex justify-between items-center w-full p-4 text-left" onclick="toggleAccordion(this)">
                    <span class="text-lg font-semibold text-primary">Deliver Results - Whatever it Takes to be Fantastic+, Safely</span>
                    <i class="fas fa-chevron-down text-secondary transition-transform duration-300"></i>
                </button>
                <div class="hidden p-4 border-t">
                    <p class="text-primary">
                        We are dedicated to delivering outstanding results, doing whatever it takes to safely achieve Fantastic+ status and drive our customers’ businesses forward. With a focus on safety, efficiency, and overall excellence scores, we align every effort with the high standards required. By maintaining accountability and prioritizing customer success, we help businesses not only reach but sustain their goals, building a strong foundation for long-term growth and excellence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript for Accordion Functionality -->
<script>
    function toggleAccordion(button) {
        const accordionItem = button.parentElement;
        const accordionContent = accordionItem.querySelector('.hidden');
        
        // Toggle visibility
        accordionContent.classList.toggle('hidden');
        
        // Rotate the chevron icon
        const icon = button.querySelector('i');
        icon.classList.toggle('fa-chevron-down');
        icon.classList.toggle('fa-chevron-up');
    }
</script>

        </main>



        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const accordionHeaders = document.querySelectorAll('.accordion-header');

                accordionHeaders.forEach(header => {
                    header.addEventListener('click', () => {
                        const content = header.nextElementSibling;
                        const icon = header.querySelector('svg');

                        content.classList.toggle('hidden');
                        icon.classList.toggle('rotate-180');

                        // Close other open accordion items
                        accordionHeaders.forEach(otherHeader => {
                            if (otherHeader !== header) {
                                const otherContent = otherHeader.nextElementSibling;
                                const otherIcon = otherHeader.querySelector('svg');
                                otherContent.classList.add('hidden');
                                otherIcon.classList.remove('rotate-180');
                            }
                        });
                    });
                });
            });
        </script>
    </div>

@endsection
