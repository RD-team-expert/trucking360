@extends('layouts.website.app')

@section('title', 'About Us - Trucking 360')

@section('content')

    <div class="bg-gray-100 font-sans">

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
                    <div class="w-64 h-64 relative" data-aos="fade-left" data-aos-duration="1200">
                        <img src="{{ asset('website/img/3.1.gif') }}" alt="Leadership placeholder"
                            class="rounded-lg w-full h-full object-cover" />
                    </div>
                </div>
            </section>

            <!-- Leadership Section -->
            <section class="container mx-auto px-4 py-16 bg-white">
                <div class="flex flex-col md:flex-row gap-12 items-start" data-aos="fade-up" data-aos-duration="800">
                    <div class="w-full md:w-1/2" data-aos="fade-right" data-aos-duration="1300">
                        <img src="{{ asset('website/img/nick.jpg') }}" alt="Leadership placeholder"
                            class="rounded-lg shadow-lg w-full" />
                    </div>
                    <div class="w-full md:w-2/3" data-aos="fade-left" data-aos-duration="1500">
                        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">
                            Nick Krave
                        </h2>
                        <h3 class="text-2xl font-bold text-primary mb-6">
                            President, Trucking <span class="text-secondary">360</span>
                        </h3>
                        <div class="space-y-6 text-primary">
                            <p class="leading-relaxed font-semibold">
                                Hi, my name is Nicholas, and I’m proud to serve as the President of Trucking <span
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


            <section data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-3xl font-bold text-primary mb-6 py-16">Our Core Principles</h2>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="accordion">
                        <div class="accordion-item border-b border-gray-200">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Customer Obsession
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We put our customers at the center of everything we do, making their needs and goals our
                                    top priority. By maintaining open communication, understanding their unique challenges,
                                    and tailoring our services to address them, we strive to exceed expectations and deliver
                                    exceptional service. Every action we take is driven by a commitment to helping our
                                    customers succeed in their operations.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Employee Obsession
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We are dedicated to engaging and empowering our customers’ employees, recognizing that
                                    they are the backbone of success in every operation. Through tailored safety campaigns,
                                    we prioritize the well-being of drivers and staff, equipping them with the knowledge and
                                    tools to maintain high safety standards. Our engagement initiatives are designed to
                                    boost morale, encourage professional growth, and foster a sense of belonging within the
                                    team. By creating a productive and supportive work environment, we help drive success,
                                    ensuring employees feel valued, motivated, and aligned with their company’s goals.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200 text-primary">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Ownership
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50">
                                <p>We take full ownership of our actions, holding ourselves accountable for every decision
                                    and outcome. By providing clear direction, we ensure that our strategies and solutions
                                    align with your goals and operational needs. We collaborate closely with your dedicated
                                    Account Success Managers (ASM) to maintain seamless communication and foster a proactive
                                    partnership. This approach allows us to address challenges swiftly, implement effective
                                    solutions, and consistently deliver results that support the growth and efficiency of
                                    your operations.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200 text-primary">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Invent & Simplify
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We continuously seek to innovate and simplify by leveraging technology to streamline
                                    processes and improve efficiency.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Learn & Be Curious
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We foster a culture of curiosity and continuous learning, encouraging exploration and
                                    innovation at every level. By offering assistance with pilot programs, we help our
                                    customers test and adopt new strategies that drive growth and adaptability. We deeply
                                    value feedback and constructive criticism, viewing them as essential tools for
                                    improvement and progress, enabling us to refine our services and exceed expectations
                                    consistently.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Hire & Develop the Best
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We are dedicated to hiring and developing top talent to best serve our customers,
                                    ensuring that our team is equipped with the skills, knowledge, and passion needed to
                                    deliver exceptional service. This same principle is seamlessly passed along to our
                                    customers’ businesses through customized hiring services designed to meet their specific
                                    needs. Whether it’s sourcing qualified drivers, selecting skilled dispatchers, or
                                    onboarding HR professionals, we tailor our approach to align with the unique demands of
                                    your operations. Beyond hiring, we focus on the development and retention of top talent,
                                    offering training programs, performance coaching, and continuous support to help
                                    employees excel and thrive in their roles. By investing in people, we empower businesses
                                    to achieve long-term success.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200 text-primary">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Insist on the Highest Standards - Fantastic+ Status
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We hold ourselves to the highest standards in every aspect of our operations, ensuring
                                    that excellence is not just a goal but a way of doing business. Striving to achieve and
                                    maintain a Fantastic+ status, we align our processes, services, and results with the
                                    rigorous expectations set by the AFP program. Every effort is directed toward delivering
                                    unmatched quality and reliability. By continuously evaluating and refining our
                                    practices, we aim not only to meet but exceed the limits that define AFP success,
                                    helping our customers achieve and sustain their Fantastic+ rating.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Bias for Action
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We strive to earn trust by consistently delivering on our promises with speed and
                                    quality, understanding that action and reliability are key to building strong
                                    partnerships. Our commitment to taking action means we do what we say we will do,
                                    ensuring every effort is executed with precision, purpose, and a sense of urgency. We
                                    embrace calculated risks when they prioritize the success of your business. Whether it’s
                                    resolving issues swiftly, implementing innovative solutions, or responding to
                                    challenges, we act proactively and effectively to keep your operations running smoothly.
                                    By combining a sense of responsibility with a focus on outcomes, we help you stay ahead
                                    in the dynamic AFP world.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Frugality - Value Added Partners & Cost Savings
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We prioritize cost savings by partnering with value-driven solutions, enabling us to
                                    deliver more with less without compromising quality or service. Our per-accepted
                                    contract cost structure ensures that our customers are in good hands, only paying for
                                    what they use, which maximizes efficiency and value at every step. As a trusted partner,
                                    we are committed to providing exceptional support while ensuring cost efficiency that
                                    drives long-term success for your operations.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Earn Trust
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We work diligently to earn and maintain trust by offering honest business guidance and
                                    fostering long-term relationships that deliver results to benefit your bottom line.</p>
                            </div>
                        </div>
                        <div class="accordion-item border-b border-gray-200">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Dive Deep - Accident Investigation & Customer Supply Chain Analysis
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We dive deep into every detail, leaving no stone unturned to ensure accuracy. We conduct
                                    thorough accident investigations including comprehensive root cause analysis and
                                    implementing actionable solutions to prevent recurrence. In addition, we analyze
                                    customer supply chains to identify inefficiencies, optimize processes, and drive
                                    continuous improvement. By leveraging data-driven insights we help our customers enhance
                                    safety, operational excellence score, and overall efficiency, ensuring their operations
                                    are robust and future-ready.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button
                                class="accordion-header w-full text-left p-4 font-bold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                                Deliver Results - Whatever it Takes to be Fantastic+, Safely
                                <svg class="w-6 h-6 transform transition-transform duration-200" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="accordion-content hidden p-4 bg-gray-50 text-primary">
                                <p>We are dedicated to delivering outstanding results, doing whatever it takes to safely
                                    achieve Fantastic+ status and drive our customers’ businesses forward. With a focus on
                                    safety, efficiency, and overall excellence scores, we align every effort with the high
                                    standards required. By maintaining accountability and prioritizing customer success, we
                                    help businesses not only reach but sustain their goals, building a strong foundation for
                                    long-term growth and excellence.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
