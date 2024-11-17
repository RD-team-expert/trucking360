@extends('layouts.website.app')

@section('title', 'About Us - Trucking 360')

@section('content')

<div class="bg-gray-100 font-sans">

    <main class="container mx-auto px-4 py-20">
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-primary mb-6">About Us</h2>
            <div class="bg-white shadow-lg rounded-lg p-6 md:flex items-start">
                {{-- <img src="https://via.placeholder.com/300x300.png?text=Nick+Krave" alt="Nick Krave" class="rounded-full w-48 h-48 object-cover mb-4 md:mb-0 md:mr-8"> <!-- Increased md:mr-6 to md:mr-8 for extra spacing --> --}}
                <div>
                    <h3 class="text-2xl font-semibold text-primary mb-2">Nick Krave</h3>
                    <p class="text-lg font-medium mb-2">President, Trucking 360</p>
                    <p class="text-gray-700 mb-4">
                        Nick Krave brings a wealth of experience and passion to his role as President of Trucking 360. With a background deeply rooted in logistics and a keen understanding of the challenges faced by Amazon Freight Partners, Nick has dedicated his career to developing customer-centered solutions that drive operational excellence.
                    </p>
                    <p class="text-gray-700 mb-4">
                        Known for his personal touch, Nick's love for dogs and commitment to building strong client relationships sets the tone for Trucking 360's customer-first approach. His leadership emphasizes flexibility, innovation, and a relentless focus on supporting our clients' success.
                    </p>
                    <p class="text-gray-700">
                        Under Nick's guidance, Trucking 360 has become a trusted partner for AFPs, delivering tailored logistics solutions that meet and exceed Amazon's rigorous standards. His vision continues to shape our company's dedication to operational efficiency and customer satisfaction.
                    </p>
                </div>
            </div>
        </section>
        

        <section>
            <h2 class="text-3xl font-bold text-primary mb-6">Our Core Principles</h2>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="accordion">
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Customer Obsession
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>At Trucking 360, we start with the customer and work backwards. We work vigorously to earn and keep customer trust. Although we pay attention to competitors, we obsess over customers.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Employee Obsession
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>We recognize that our employees are the backbone of our success. We invest in their growth, provide a supportive work environment, and ensure their well-being is prioritized.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Ownership
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>Trucking 360 leaders are owners. They think long term and don't sacrifice long-term value for short-term results. They act on behalf of the entire company, beyond just their own team.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Invent & Simplify
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>We constantly seek ways to simplify. We are externally aware, look for new ideas from everywhere, and are not limited by "not invented here." As we do new things, we accept that we may be misunderstood for long periods of time.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Learn & Be Curious
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>We are never done learning and always seek to improve ourselves. We are curious about new possibilities and act to explore them.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Hire & Develop the Best
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>We raise the performance bar with every hire and promotion. We recognize exceptional talent, and willingly move them throughout the organization. We develop leaders and take their role in coaching others seriously.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Insist on the Highest Standards - Fantastic+ Status
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>We have relentlessly high standards - many people may think these standards are unreasonably high. We continually raise the bar and drive our teams to deliver high-quality products, services, and processes. We ensure that defects do not get sent down the line and that problems are fixed so they stay fixed.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Bias for Action
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>Speed matters in business. Many decisions and actions are reversible and do not need extensive study. We value calculated risk-taking.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Frugality - Value Added Partners & Cost Savings
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>We try not to spend money on things that don't matter to customers. Frugality breeds resourcefulness, self-sufficiency, and invention. There are no extra points for headcount, budget size, or fixed expense.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Earn Trust
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>Leaders listen attentively, speak candidly, and treat others respectfully. They are vocally self-critical, even when doing so is awkward or embarrassing. They benchmark themselves and their teams against the best.</p>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Dive Deep - Accident Investigation & Customer Supply Chain Analysis
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>Leaders operate at all levels, stay connected to the details, audit frequently, and are skeptical when metrics and anecdote differ. No task is beneath them.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header w-full text-left p-4 font-semibold text-primary hover:bg-gray-50 focus:outline-none flex justify-between items-center">
                            Deliver Results - Whatever it Takes to be Fantastic+, Safely
                            <svg class="w-6 h-6 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="accordion-content hidden p-4 bg-gray-50">
                            <p>Leaders focus on the key inputs for their business and deliver them with the right quality and in a timely fashion. Despite setbacks, they rise to the occasion and never settle.</p>
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
